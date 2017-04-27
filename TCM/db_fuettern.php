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
            $i = 0;
            foreach ($TCM->kategorien->kategorie as $kategorie) {
                $insert_parts[] = "(".$i.",'".$kategorie->name."')";
                $i++;
            }
            $kat_query="INSERT INTO kategorie (kat_id, name) VALUES ".implode(",",$insert_parts).";";
                 
            //echo "<br>".$kat_query;     
            mysqli_query($db, $kat_query) or die(mysqli_error($db));
                
            $i = 0;
            foreach ($TCM->kraeuter->kraut as $kraut) {
                
                $wirkungs_array = array();
                foreach ($kraut->wirkung as $wirkung) {
                    $wirkungs_array[] = $wirkung;
                }
                $merkmal_array = array();
                foreach ($kraut->merkmal as $merkmal) {
                    $merkmal_array[] = $merkmal;
                }
                $tuple_array[] = "(".$i.",'".$kraut->name."','".implode("--",$wirkungs_array)."','".implode("--",$merkmal_array)."','".$kraut->bild['quelle']."')";
                $i++;
            }
            $kra_query = "INSERT INTO kraut (kra_id, name, wirkung, merkmal, bild) VALUES ".implode(",",$tuple_array).";";
            //echo "<br>".$kra_query;
            
            mysqli_query($db, $kra_query) or die(mysqli_error($db));
            
        ?>
            
    </body>
</html>