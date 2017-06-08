<?php 
    include '../header.php';
    
    $kraut_name = $_POST["kraut_name"];
    $kraut_alternativname = $_POST["kraut_alternativname"];
    $kraut_alternativname_array = implode("#-#-#", $kraut_alternativname);
    //$kraut_wirkung = $_POST["kraut_wirkung"];
    //$kraut_merkmal = $_POST["kraut_merkmal"];
    $kraut_wirkungen = $_POST["kraut_wirkungen"];
    $kraut_wirkungen_array = implode("#-#-#", $kraut_wirkungen);
    $kraut_merkmale = $_POST["kraut_merkmale"];
    $kraut_merkmale_array = implode("#-#-#", $kraut_merkmale);
    
    $kraut_kat_id = $_POST["kraut_kat"];

    
    $sql = "INSERT INTO kraut
            (
                name,
                alternativname,
                wirkung,
                merkmal
            )
            VALUES
            (
                '$kraut_name',
                '$kraut_alternativname_array',
                '$kraut_wirkungen_array',
                '$kraut_merkmale_array'
            )";
    $result = mysqli_query($db, $sql);
   // $anzahl = mysqli_num_rows($result);
   
    $sql_kra_id = "SELECT kra_id FROM kraut WHERE name = '" . $kraut_name . "';";
    //echo $sql_kat_id . "<br>";    
    $result_kra_id = mysqli_query($db, $sql_kra_id);
    $kra_id = mysqli_fetch_array($result_kra_id);
    
    foreach ($kraut_kat_id as $kat_id) {
        $sql_angehoerigkeit = "INSERT INTO kategorieangehoerigkeit (kat_id, kra_id) VALUES ('" . $kat_id . "', '" . $kra_id['kra_id'] . "');";
        mysqli_query($db, $sql_angehoerigkeit) or die(mysqli_error($db));
    }

?>
    
    <div id="headline"><h1><?php echo $kraut_name ?></h1></div>
    
    <?php
    
    if ($kraut_alternativname == true) {
        echo "<h4>Weitere Bezeichnungen:</h4>";
        foreach ($kraut_alternativname as $eachAlternativname) {
            echo "<li>" . $eachAlternativname . "</li>"   ;
        }
    }
    ?>
    

        <h4>Merkmal und Wirkung</h4>
    
        <?php    

            foreach ($kraut_wirkungen as $eachWirkung) {
                echo "<li>" . $eachWirkung . "</li>";
            }
            foreach ($kraut_merkmale as $eachMerkmal) {
                echo "<li>" . $eachMerkmal . "</li>";
            }
        ?>
        
        <h4>Kategorie</h4>    
        
        <?php

            foreach ($kraut_kat_id as $kat_id) {
                $sql_kat_name = "SELECT name FROM kategorie WHERE kat_id = " . $kat_id . ";";
                $result_kat_name = mysqli_query($db, $sql_kat_name);
                $kat_name = mysqli_fetch_array($result_kat_name);
                echo "<li>" . $kat_name['name'] . "</li>";
            }

            if ($result = true) {
                echo "<p>Kraut wurde gespeichert.</p>";
            } else {
                echo "<p>Die Speicherung ist nicht erfolgt.</p>";
            }
        ?>
        <form>
            <input Type="button" value="Zurück" onClick="history.go(-1);return true;">
        </form>
        <form action="https://semesterproject-frieda.c9users.io/TCM/kraut/alle_kraeuter.php">
            <input type="submit" value="Alle Kräuter anzeigen" />
        </form>
    
<?php    
    include '../footer.php';
?>