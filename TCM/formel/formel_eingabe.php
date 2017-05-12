<?php 
    include '../header.php';
?>
    
    <div id="headline"><h2>Formel-Eingabe</h2></div>
    
    <div id="content">
        <form action="formel_ausgabe.php" method="post">
            <li>Name: <input type="text" name="formel_name"/></li>
           
            <div id="dynamicAnwendungsgebiet">
                <li>Anwendungsgebiet: <input type="text" name="formel_anwendungsgebiete[]"></li>
            </div>
           
            <input type="button" value="+" onClick="addInput('Anwendungsgebiet', 'dynamicAnwendungsgebiet', 'formel_anwendungsgebiete[]');">
           
            <div id="dynamicWirkung">
                <li>Wirkung: <input type="text" name="formel_wirkungen[]"></li>
            </div>
           
            <input type="button" value="+" onClick="addInput('Wirkung', 'dynamicWirkung', 'formel_wirkungen[]');">
            
            <div id="dynamicNotiz">
                <li>Notiz: <input type="text" name="formel_notizen[]"></li>
            </div>
           
            <input type="button" value="+" onClick="addInput('Notiz', 'dynamicNotiz', 'formel_notizen[]');">
            
            <input type="submit" value="Speichern"/>
            <input type="reset" value="Zurücksetzen"/>
            
        </form>
        
    </div>
    
<?php    
    include '../footer.php';
?>