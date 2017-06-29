<?php 
    include '../header.php';
    if ($_SESSION['benutzername'] == FALSE) {
        echo "<p>Du kannst dich <a href='/TCM/index.php'>hier</a> einloggen.</p>";    
        exit;
    }
    
    $kraut_id = $_POST['kraut_id'];

    $sql_kra = "SELECT * FROM kraut WHERE kra_id='" . $kraut_id . "';";
    $result_kra = mysqli_query($db, $sql_kra);
    $kraut_bearbeiten = mysqli_fetch_array($result_kra);
    
    $sql_kat_id = "SELECT kat_id from kategorieangehoerigkeit WHERE kra_id='" . $kraut_id . "';";
    $result_kat_id = mysqli_query($db, $sql_kat_id);

    $kat_name_array = array();
    foreach ($result_kat_id as $kat_id) {
        $sql_kat_name = "SELECT name FROM kategorie WHERE kat_id ='" . $kat_id['kat_id'] . "';";
        $result_kat_bearbeiten = mysqli_query($db, $sql_kat_name);
        $kat_bearbeiten = mysqli_fetch_array($result_kat_bearbeiten);
        $kat_name_array[] = $kat_bearbeiten['name'];
        //echo $kat_bearbeiten['name'];
        
    }
    
    if ($kraut_id) {
        echo '<div id="headline"><h1>Kraut bearbeiten</h1></div>';
    } else {
        echo '<div id="headline"><h1>Neues Kraut</h1></div>';
    }
?>
    
    <form action="kraut_ausgabe.php" method="post">
    <input type="hidden" name="kraut_id" value="<?php echo $kraut_id ?>">
    <h4>Name: </h4>
    <div class="flexcontainer">
        <input class="eingabe" type="text" name="kraut_name" value="<?php echo $kraut_bearbeiten['name']; ?>"/>
    </div>
    
    <div id="dynamicAlternativname">
        <h4>Weitere Bezeichnung: </h4>
        <?php
            if ($kraut_id) {
                $alternativname_array = explode("#-#-#", $kraut_bearbeiten['alternativname']);
                foreach ($alternativname_array as $alternativname) {
                    echo '<div class="flexcontainer">';
                    echo '<input class="eingabe" type="text" name="kraut_alternativname[]" value="' . $alternativname . '"/>';
                    echo "<input class='minusbutton' type='button' value='-'>";
                    echo '</div>';
                }
            }
        ?>
        <div class="flexcontainer">
                <input class="eingabe" type="text" name="kraut_alternativname[]"/>
                <input class="plusbutton" type="button" value="+" onClick="addInput('dynamicAlternativname', 'kraut_alternativname[]');">
        </div>
    </div>
               
    <div id="dynamicWirkung">
        <h4>Wirkung: </h4>
        <?php
            if ($kraut_id) {
                $wirkung_array = explode("#-#-#", $kraut_bearbeiten['wirkung']);
                foreach ($wirkung_array as $wirkung) {
                    echo '<div class="flexcontainer">';
                    echo '<input class="eingabe" type="text" name="kraut_wirkungen[]" value="' . $wirkung . '"/>';
                    echo "<input class='minusbutton' type='button' value='-'>";
                    echo '</div>';
                }
            }
        ?>
        <div class="flexcontainer">
            <input class="eingabe" type="text" name="kraut_wirkungen[]"/>
            <input class="plusbutton" type="button" value="+" onClick="addInput('dynamicWirkung', 'kraut_wirkungen[]');">
        </div>
    </div>
    
    <div id="dynamicMerkmal">
        <h4>Merkmal: </h4>
        <?php
            if ($kraut_id) {
                $merkmal_array = explode("#-#-#", $kraut_bearbeiten['merkmal']);
                foreach ($merkmal_array as $merkmal) {
                    echo '<div class="flexcontainer">';
                    echo '<input class="eingabe" type="text" name="kraut_merkmale[]" value="' . $merkmal . '"/>';
                    echo "<input class='minusbutton' type='button' value='-'>";
                    echo '</div>';
                }
                
            }
        ?>
        <div class="flexcontainer">
            <input class="eingabe" type="text" name="kraut_merkmale[]"/>
            <input class="plusbutton" type="button" value="+" onClick="addInput('dynamicMerkmal', 'kraut_merkmale[]');">
        </div>
    </div>
                
    <h4>Kategorie:</h4>
    <select name="kraut_kat[]" class="kat_auswahl" size="10" multiple>
        <?php
            foreach($result_kat as $kat) {
                if (in_array($kat['name'], $kat_name_array)) {
                    echo "<option selected value'" . $kat['kat_id'] . "'>" . $kat['name'] . "</option>";
                } else {
                    echo "<option value='" . $kat['kat_id'] . "'>" . $kat['name'] . "</option>";
                }
            }
        ?>
    </select>
                
    <h4>Bild: </h4>
    <input type="submit" value="Speichern"/>
    <input type="reset" value="Zurücksetzen"/>
            
</form>
<!--form action="https://semesterproject-frieda.c9users.io/TCM/kraut/alle_kraeuter.php">
    <input type="submit" value="Alle Kräuter anzeigen" />
</form-->

<?php    
    include '../footer.php';
?>