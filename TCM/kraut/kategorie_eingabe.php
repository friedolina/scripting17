<?php 
    include '../header.php';
?>
    
<div id="headline"><h2>Neue Kategorie</h2></div>

<form action="kategorie_ausgabe.php" method="post">
    <ul>
        <li>Name: <input type="text" name="kategorie_name"/></li>
               
        <li>Kräuter:</li>
            <select name="kat_kraut[]" multiple>
                <?php
                foreach($result_kraut as $kraut) {
                    echo "<option value='" . $kraut['kra_id'] . "'>" . $kraut['name'] . "</option>";
                }
                ?>
            </select>

    </ul>
            
    <input type="submit" value="Speichern"/>
    <input type="reset" value="Zurücksetzen"/>
            
</form>
<!--form action="https://semesterproject-frieda.c9users.io/TCM/kraut/alle_kraeuter.php">
    <input type="submit" value="Alle Kräuter anzeigen" />
</form-->




    
<?php
    include '../footer.php';
?>