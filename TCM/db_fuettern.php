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
                foreach ($TCM->kategorien->kategorie as $kategorie) {
                    $insert_parts[] = $kategorie->name;
            
                    echo "<br>" . "Kategorie: " . $kategorie->name;
                }
                $query="INSERT INTO kategorie (name) VALUES ('".implode("'),('",$insert_parts)."');";
               echo $query;
               mysqli_query($db, $query);
                    /**$kat_eintrag = "INSERT INTO kategorie (name) VALUES ('$kategorie->name')";
                    $eintragen = mysqli_query($db, $kat_eintrag);**/    
            ?>
            
            </body>
            </html>