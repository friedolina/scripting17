<?php 
    include '../header.php';

$sql = "SELECT
            *
       FROM 
            formel";
            
$result = mysqli_query($db, $sql);

?>
<form action="https://semesterproject-frieda.c9users.io/TCM/formel/formel_eingabe.php">
    <input type="submit" value="Neue Formel eingeben" />
</form>

<?php

while ( $tuple = mysqli_fetch_assoc($result)) {
    echo "<form class='entry' id=formel" . $tuple['for_id'] . ">";
    echo "<div id='show_entry_" . $tuple['for_id'] . "'>";
    echo "<h3>" . $tuple['name'] . "</h3><input class='bearbeiten' type ='button' value='Bearbeiten' onClick='formelBearbeiten(this);'>";
    echo "<h4>Anwendungsgebiet</h4><li>" . str_replace("#-#-#","</li><li>",$tuple['anwendungsgebiet']) . "</li>";
    echo "<h4>Wirkung</h4><li>" . str_replace("#-#-#","</li><li>",$tuple['wirkung']) . "</li>";
    echo "<h4>Notiz</h4><li>" . str_replace("#-#-#","</li><li>",$tuple['notiz']) . "</li>";
    echo "</div>";

/**    echo "<div id='change_entry_" . $tuple['for_id'] . "'>";
   // echo "<p>Name:</p> <input type='text' name='name' value='<?php echo $tuple['name'];?'>";
    echo "<li>Name: <input type='text' name='formel_name value='" . $tuple['name'] . "'/></li>";
    //echo '<li>Name: <input type="text" name="formel_name"/></li>';
    
    echo "</div>";**/
    echo "</form>";
}



include '../footer.php';

?>
