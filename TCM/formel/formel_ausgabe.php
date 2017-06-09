<?php 
    include '../header.php';
    
    $formel_name = $_POST["formel_name"];
    $formel_wirkungen = $_POST["formel_wirkungen"];
    $formel_wirkungen_array = implode("#-#-#", $formel_wirkungen);
    $formel_anwendungsgebiete = $_POST["formel_anwendungsgebiete"];
    $formel_anwendungsgebiete_array = implode("#-#-#", $formel_anwendungsgebiete);
    $formel_notizen = $_POST["formel_notizen"];
    $formel_notizen_array = implode("#-#-#", $formel_notizen);
    $formel_klasse_id = $_POST["formel_klasse"];


    
    $sql = "INSERT INTO formel
            (
                name,
                anwendungsgebiet,
                wirkung,
                notiz
            )
            VALUES
            (
                '$formel_name',
                '$formel_anwendungsgebiete_array',
                '$formel_wirkungen_array',
                '$formel_notizen_array'
            )";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
   // $anzahl = mysqli_num_rows($result);
   
    $sql_for_id = "SELECT for_id FROM formel WHERE name = '" . $formel_name . "';";
    $result_for_id = mysqli_query($db, $sql_for_id) or die(mysqli_error($db));
    $for_id = mysqli_fetch_array($result_for_id);
   
   foreach ($formel_klasse_id as $kla_id) {
        $sql_angehoerigkeit = "INSERT INTO klassenangehoerigkeit (kla_id, for_id) VALUES ('" . $kla_id . "', '" . $for_id['for_id'] . "');";
        mysqli_query($db, $sql_angehoerigkeit) or die(mysqli_error($db));
    }

?>
    
    <div id="headline"><h2><?php echo $formel_name ?></h2></div>
    
        <h4>Anwendungsgebiet</h4>
    
        <?php    
            foreach ($formel_anwendungsgebiete as $eachAnwendungsgebiet) {
                echo "<li>" . $eachAnwendungsgebiet . "</li>";
            }
        ?>
        <h4>Wirkung</h4>
        <?php
            foreach ($formel_wirkungen as $eachWirkung) {
                echo "<li>" . $eachWirkung . "</li>";
            }
        ?>
        <h4>Notizen</h4>
        <?php
            foreach ($formel_notizen as $eachNotiz) {
                echo "<li>" . $eachNotiz . "</li>";
            }
        ?>
        <h4>Klasse</h4>    
        
        <?php

            foreach ($formel_klasse_id as $kla_id) {
                $sql_kla_name = "SELECT name FROM klasse WHERE kla_id = " . $kla_id . ";";
                $result_kla_name = mysqli_query($db, $sql_kla_name) or die(mysqli_error($db));
                $kla_name = mysqli_fetch_array($result_kla_name) or die(mysqli_error($db));
                echo "<li>" . $kla_name['name'] . "</li>";
            }

            if ($result = true) {
                echo "<p>Formel wurde gespeichert.</p>";
            } else {
                echo "<p>Die Speicherung ist nicht erfolgt.</p>";
            }
        ?>
        <form>
            <input Type="button" value="Zurück" onClick="history.go(-1);return true;">
        </form>
        <form action="https://semesterproject-frieda.c9users.io/TCM/formel/alle_formeln.php">
            <input type="submit" value="Alle Formeln anzeigen" />
        </form>

<?php    
    include '../footer.php';
?>