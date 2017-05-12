<?php 
    include '../header.php';
    
    $formel_name = $_POST["formel_name"];
    $formel_wirkungen = $_POST["formel_wirkungen"];
    $formel_wirkungen_array = implode(" -- ", $formel_wirkungen);
    $formel_anwendungsgebiete = $_POST["formel_anwendungsgebiete"];
    $formel_anwendungsgebiete_array = implode(" -- ", $formel_anwendungsgebiete);
    $formel_notizen = $_POST["formel_notizen"];
    $formel_notizen_array = implode(" -- ", $formel_notizen);

    
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
    $result = mysqli_query($db, $sql);
   // $anzahl = mysqli_num_rows($result);

?>
    
    <div id="headline"><h2><?php echo $formel_name ?></h2></div>
    
    <div id="content">
    
        <h3>Anwendungsgebiet</h3>
    
        <?php    
            foreach ($formel_anwendungsgebiete as $eachAnwendungsgebiet) {
                echo "<li>" . $eachAnwendungsgebiet . "</li>";
            }
        ?>
        <h3>Wirkung</h3>
        <?php
            foreach ($formel_wirkungen as $eachWirkung) {
                echo "<li>" . $eachWirkung . "</li>";
            }
        ?>
        <h3>Notizen</h3>
        <?php
            foreach ($formel_notizen as $eachNotiz) {
                echo "<li>" . $eachNotiz . "</li>";
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
        
    
    </div>
<?php    
    include '../footer.php';
?>