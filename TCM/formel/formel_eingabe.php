<?php 
    include '../header.php';
?>
    
    <div id="headline"><h2>Neue Formel</h2></div>
    
        <form action="formel_ausgabe.php" method="post">
            <h4>Name: </h4>
            <input class="eingabe" type="text" name="formel_name"/>
           
            <div id="dynamicAnwendungsgebiet">
                <h4>Anwendungsgebiet: </h4>
                <input class="eingabe" type="text" name="formel_anwendungsgebiete[]">
                <input class="plusbutton" type="button" value="+" onClick="addInput('Anwendungsgebiet', 'dynamicAnwendungsgebiet', 'formel_anwendungsgebiete[]');">

            </div>

            <div id="dynamicWirkung">
                <h4>Wirkung: </h4>
                <input class="eingabe" type="text" name="formel_wirkungen[]">
               <input class="plusbutton" type="button" value="+" onClick="addInput('Wirkung', 'dynamicWirkung', 'formel_wirkungen[]');">
            </div>
           
            <div id="dynamicNotiz">
                <h4>Notiz: </h4>
                <input class="eingabe" type="text" name="formel_notizen[]">
                <input class="plusbutton" type="button" value="+" onClick="addInput('Notiz', 'dynamicNotiz', 'formel_notizen[]');">
            </div>
            <div id="kraut_auswahl">
                <h4>Bestandteile</h4>
                <input class="eingabe" type="text" id="formelkraut_eingabe" name="formelkraut_eingabe[]" maxlength="150" placeholder="Kraut...">
                <div id="formel_response" class="scrollable-menu responsecontainer"></div>
                <div id="formelkraeuter"></div>
            </div>
            
            <h4>Klasse:</h4>
            <select name="formel_klasse[]" class="kat_auswahl" size="10" multiple>
                <?php
                    foreach($result_klasse as $kla) {
                        echo "<option value='" . $kla['kla_id'] . "'>" . $kla['name'] . "</option>";
                    }
                ?>
            </select>
           
            <input type="submit" value="Speichern"/>
            <input type="reset" value="Zurücksetzen"/>
            
        </form>
        
<?php    
    include '../footer.php';
?>