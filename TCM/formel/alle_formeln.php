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
    echo "<div class='entry'>";
    echo "<h3>" . $tuple["for_id"] . ". " . $tuple["name"] . "</h3>";
    echo "<h4>Anwendungsgebiet</h4><p>" . $tuple["anwendungsgebiet"] . "</p>";
    echo "<h4>Wirkung</h4><p>" . $tuple["wirkung"] . "</p>";
    echo "<h4>Notiz</h4><p>" . $tuple["notiz"] . "</p>";
    echo "</div>";
}

include '../footer.php';

?>
