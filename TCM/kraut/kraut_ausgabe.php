<?php 
    include '../header.php';
    
    $kraut_name = $_POST["kraut_name"];
    //$kraut_wirkung = $_POST["kraut_wirkung"];
    //$kraut_merkmal = $_POST["kraut_merkmal"];
    $kraut_wirkungen = $_POST["kraut_wirkungen"];
    $kraut_wirkungen_array = implode(" -- ", $kraut_wirkungen);
    $kraut_merkmale = $_POST["kraut_merkmale"];
    $kraut_merkmale_array = implode(" -- ", $kraut_merkmale);

    
    $sql = "INSERT INTO kraut
            (
                name,
                wirkung,
                merkmal
            )
            VALUES
            (
                '$kraut_name',
                '$kraut_wirkungen_array',
                '$kraut_merkmale_array'
            )";
    $result = mysqli_query($db, $sql);
   // $anzahl = mysqli_num_rows($result);

?>
    
    <div id="headline"><h2><?php echo $kraut_name ?></h2></div>
    
    <div id="content">
    
        <h3>Merkmal und Wirkung</h3>
    
        <?php    
            foreach ($kraut_wirkungen as $eachWirkung) {
                echo "<li>" . $eachWirkung . "</li>";
            }
            foreach ($kraut_merkmale as $eachMerkmal) {
                echo "<li>" . $eachMerkmal . "</li>";
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
    
    </div>
<?php    
    include '../footer.php';
?>