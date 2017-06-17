<?php 
    include '../header.php';
?>
    
<div id="headline"><h1>Neues Kraut</h1></div>
    
<form action="kraut_ausgabe.php" method="post">
    <h4>Name: </h4>
    <input class="eingabe" type="text" name="kraut_name"/>
    
    <div id="dynamicAlternativname">
        <h4>Weitere Bezeichnung: </h4>
        <input class="eingabe" type="text" name="kraut_alternativname[]">
        <input class="plusbutton" type="button" value="+" onClick="addInput('Weitere Bezeichnung', 'dynamicAlternativname', 'kraut_alternativname[]');">
    </div>
               
    <div id="dynamicWirkung">
        <h4>Wirkung: </h4>
        <input class="eingabe" type="text" name="kraut_wirkungen[]">
        <input class="plusbutton" type="button" value="+" onClick="addInput('Wirkung', 'dynamicWirkung', 'kraut_wirkungen[]');">
    </div>
    
    <div id="dynamicMerkmal">
        <h4>Merkmal: </h4>
        <input class="eingabe" type="text" name="kraut_merkmale[]"/>
        <input class="plusbutton" type="button" value="+" onClick="addInput('Merkmal', 'dynamicMerkmal', 'kraut_merkmale[]');">
    </div>
                
    <h4>Kategorie:</h4>
    <select name="kraut_kat[]" class="kat_auswahl" size="10" multiple>
        <?php
            foreach($result_kat as $kat) {
                echo "<option value='" . $kat['kat_id'] . "'>" . $kat['name'] . "</option>";
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