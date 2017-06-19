<?php 
    include '../header.php';
    if ($_SESSION['benutzername'] == FALSE) {
        echo "<p>Du kannst dich <a href='/TCM/index.php'>hier</a> einloggen.</p>";    
        exit;
    }
?>
    
<div id="headline"><h1>Neue Kategorie</h1></div>

<form action="kategorie_ausgabe.php" method="post">
    <h4>Name: </h4><input class="eingabe" type="text" name="kategorie_name"/>
               
    <h4>Kräuter:</h4>
    <select name="kat_kraut[]" class="kat_auswahl" size=10 multiple>
        <?php
            foreach($result_kraut as $kraut) {
                echo "<option value='" . $kraut['kra_id'] . "'>" . $kraut['name'] . "</option>";
            }
        ?>
    </select>

    <input type="submit" value="Speichern"/>
    <input type="reset" value="Zurücksetzen"/>
            
</form>

<?php
    include '../footer.php';
?>