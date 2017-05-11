<?php 
    include '../header.php';
?>
    <script src="../addInput.js" language="Javascript" type="text/javascript"></script>
    
    <div id="headline"><h2>Kraut-Eingabe</h2></div>
    
    <div id="content">
        <form action="kraut_ausgabe.php" method="post">
            <li>Name: <input type="text" name="kraut_name"/></li>
            <div id="dynamicInput">
                <li>Wirkung: <input type="text" name="myInputs[]"></li>
                <input type="button" value="+" onClick="addInput('dynamicInput');">
            </div>
            <li>Merkmal: <input type="text" name="kraut_merkmal"/></li> 
            <li>Bild: </li>
            <input type="submit" value="Speichern"/>
            <input type="reset" value="Zurücksetzen"/>
        </form>
        
<!--        <form method="POST">
            <div id="dynamicInput">
                Entry 1<br><input type="text" name="myInputs[]">
            </div>
            <input type="button" value="Add another text input" onClick="addInput('dynamicInput');">
        </form>-->
    
    </div>
    
<?php    
    include '../footer.php';
?>