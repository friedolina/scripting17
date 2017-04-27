<?php
    include 'TCM.php';
    include 'connect.php';
    
    $TCM = new SimpleXMLElement($xmlstr);
    
    foreach ($TCM->kategorien->kategorie as $kategorie) {
        $kat_eintrag = "Insert into kategorie (name) values ('$kategorie->name')";
        $eintragen = mysqli_query($db, $kat_eintrag);
    }
    
    
?>