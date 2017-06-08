<?php 
    include '../header.php';
?>
    
    <div id="headline"><h1>Kraut-Eingabe</h1></div>
    
    <div id="content">
        <form action="kraut_ausgabe.php" method="post">
            <li>Name: <input type="text" name="kraut_name"/></li>
           
            <div id="dynamicWirkung">
                <li>Wirkung: <input type="text" name="kraut_wirkungen[]"></li>
            </div>
           
            <input type="button" value="+" onClick="addInput('Wirkung', 'dynamicWirkung', 'kraut_wirkungen[]');">
           
            <div id="dynamicMerkmal">
                <li>Merkmal: <input type="text" name="kraut_merkmale[]"/></li> 
            </div>
            
            <input type="button" value="+" onClick="addInput('Merkmal', 'dynamicMerkmal', 'kraut_merkmale[]');">
            
            <li>Bild: </li>
            
            <input type="submit" value="Speichern"/>
            <input type="reset" value="Zurücksetzen"/>
            
        </form>
        <form action="https://semesterproject-frieda.c9users.io/TCM/kraut/alle_kraeuter.php">
            <input type="submit" value="Alle Kräuter anzeigen" />
        </form>

    </div>
    
<?php    
    include '../footer.php';
?>