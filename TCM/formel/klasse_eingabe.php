<?php 
    include '../header.php';
    if ($_SESSION['benutzername'] == FALSE) {
        echo "<p>Du kannst dich <a href='/TCM/index.php'>hier</a> einloggen.</p>";    
        exit;
    }
?>
    
<div id="headline"><h1>Neue Formelklasse</h1></div>

<form action="klasse_ausgabe.php" method="post">
    <h4>Name: </h4><input class="eingabe" type="text" name="klasse_name"/>
               
    <h4>Formeln:</h4>
    <select name="klasse_formel[]" multiple class="kat_auswahl" size=10>
        <?php
            foreach($result_formel as $formel) {
                echo "<option value='" . $formel['for_id'] . "'>" . $formel['name'] . "</option>";
            }
        ?>
    </select>

    <input type="submit" value="Speichern"/>
    <input type="reset" value="Zurücksetzen"/>
            
</form>

<?php
    include '../footer.php';
?>