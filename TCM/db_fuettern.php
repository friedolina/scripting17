<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
        <title>TCM-Transformation</title>
        <meta charset="UTF-8">
        </head>
    <body>
        <?php
            include 'connect.php';
            include 'TCM.php';
            
            $TCM = new SimpleXMLElement($xmlstr);
            
        /**Kraut-Kategorien**/    
            $kategorie_erstellen = "CREATE TABLE kategorie(kat_id INTEGER NOT NULL AUTO_INCREMENT, name VARCHAR(100), PRIMARY KEY (kat_id)) ENGINE=InnoDB;";
            mysqli_query($db, $kategorie_erstellen) or die(mysqli_error($db));
            $i = 1;
            foreach ($TCM->kategorien->kategorie as $kategorie) {
                $insert_parts[] = "(".$i.",'".$kategorie->name."')";
                $i++;
            }
            $kategorie_query="INSERT INTO kategorie (kat_id, name) VALUES ".implode(",",$insert_parts).";";
                 
            //echo "<br>".$kategorie_query;     
            mysqli_query($db, $kategorie_query) or die(mysqli_error($db));
                
        /**Kraeuter**/
            $kraut_erstellen = "CREATE TABLE kraut(kra_id INTEGER NOT NULL AUTO_INCREMENT, name VARCHAR(1000), wirkung VARCHAR(2000), merkmal VARCHAR(2000), bild VARCHAR(100), PRIMARY KEY (kra_id)) ENGINE=InnoDB;";
            mysqli_query($db, $kraut_erstellen) or die(mysqli_error($db));
            $i = 1;
            foreach ($TCM->kraeuter->kraut as $kraut) {
                
                $krautwirkung_array = array();
                foreach ($kraut->wirkung as $krautwirkung) {
                    $krautwirkung_array[] = $krautwirkung;
                }
                $merkmal_array = array();
                foreach ($kraut->merkmal as $merkmal) {
                    $merkmal_array[] = $merkmal;
                }
                $kraut_tuple_array[] = "(".$i.",'".$kraut->name."','".implode(" -- ",$krautwirkung_array)."','".implode(" -- ",$merkmal_array)."','".$kraut->bild['quelle']."')";
                $i++;
            }
            $kraut_query = "INSERT INTO kraut (kra_id, name, wirkung, merkmal, bild) VALUES ".implode(",",$kraut_tuple_array).";";
            //echo "<br>".$kraut_query;
            
            mysqli_query($db, $kraut_query) or die(mysqli_error($db));
        
        /**Formeln**/
            $formel_erstellen = "CREATE TABLE formel(for_id INTEGER NOT NULL AUTO_INCREMENT, name VARCHAR(100), anwendungsgebiet VARCHAR(2000), wirkung VARCHAR(2000), notiz VARCHAR(2000), PRIMARY KEY (for_id)) ENGINE=InnoDB;";
            mysqli_query($db, $formel_erstellen) or die(mysqli_error($db));
            $j = 1;
            foreach ($TCM->formeln->formel as $formel) {
            //    $name_array = array();
            //    foreach ($formel->name as $name) {
            //        $name_array[] = $name;
            //    }
                $anwendungsgebiet_array = array();
                foreach ($formel->anwendungsgebiet as $anwendungsgebiet) {
                    $anwendungsgebiet_array[] = $anwendungsgebiet;
                }
                $formelwirkung_array = array();
                foreach ($formel->wirkung as $formelwirkung) {
                    $formelwirkung_array[] = $formelwirkung;
                }
                $notiz_array = array();
                foreach ($formel->notiz as $notiz) {
                    $notiz_array[] = $notiz;
                    
                }
                $formel_tuple_array[] = "(".$j.",'".$formel->name."','".implode(" -- ",$anwendungsgebiet_array)."','".implode(" -- ",$formelwirkung_array)."','".implode(" -- ",$notiz_array)."')";
                $j++;
            }
            $formel_query = "INSERT INTO formel (for_id, name, anwendungsgebiet, wirkung, notiz) VALUES ".implode(",",$formel_tuple_array).";";
            mysqli_query($db, $formel_query) or die(mysqli_error($db));
            
        /**Formelklassen**/
            $formelklasse_erstellen = "CREATE TABLE formelklasse (forkla_id INTEGER NOT NULL AUTO_INCREMENT, name VARCHAR(100), PRIMARY KEY(forkla_id)) ENGINE=InnoDB;";
            mysqli_query($db, $formelklasse_erstellen) or die(mysqli_error($db));
            
            $k = 1;
            foreach ($TCM->klassen->klasse as $klasse) {
                $insert_formelklasse[] = "(".$k.",'".$klasse->name."')";
                $k++;
            }
            $formelklasse_query="INSERT INTO formelklasse (forkla_id, name) VALUES ".implode(",",$insert_formelklasse).";";
            mysqli_query($db, $formelklasse_query) or die(mysqli_error($db));
            //echo $formelklasse_query; 
        ?>
            
    </body>
</html>