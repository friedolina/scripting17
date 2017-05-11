<?php 
    include '../header.php';
    
    $kraut_name = $_POST["kraut_name"];
    $kraut_wirkung = $_POST["kraut_wirkung"];
    $kraut_merkmal = $_POST["kraut_merkmal"];
    $myInputs = $_POST["myInputs"];
    $wirkung_array = implode(" -- ", $myInputs);

    
    $sql = "INSERT INTO kraut
            (
                name,
                wirkung,
                merkmal
            )
            VALUES
            (
                '$kraut_name',
                '$wirkung_array',
                '$kraut_merkmal'
            )";
    $result = mysqli_query($db, $sql);
   // $anzahl = mysqli_num_rows($result);

?>
    
    <div id="headline"><h2><?php echo $kraut_name ?></h2></div>
    
    <div id="content">
    
        <h3>Merkmal und Wirkung</h3>
    
        <?php    
            foreach ($myInputs as $eachInput) {
                echo "<li>" . $eachInput . "</li>";
            }
        ?>    
        <li><?php echo $kraut_merkmal ?></li>

        <?php
           
            if ($result = true) {
                echo "<p>Kraut wurde gespeichert.</p>";
            } else {
                echo "<p>Die Speicherung ist nicht erfolgt.</p>";
            }
        ?>
        <form><input Type="button" value="Zurück" onClick="history.go(-1);return true;"></form>
        <form action="https://semesterproject-frieda.c9users.io/TCM/kraut/alle_kraeuter.php"><input type="submit" value="Alle Kräuter anzeigen" /></form>
    
    </div>
<?php    
    include '../footer.php';
?>