<?php 
    include '../header.php';

$sql = "SELECT
            *
       FROM 
            kraut";
            
$result = mysqli_query($db, $sql);

?>
<form action="https://semesterproject-frieda.c9users.io/TCM/kraut/kraut_eingabe.php">
    <input type="submit" value="Neues Kraut eingeben" />
</form>

<?php

while ( $tuple = mysqli_fetch_assoc($result)) {
    echo "<ul>";
    echo "<h3>" . $tuple["kra_id"] . ". " . $tuple["name"] . "</h3>";
    if ( $tuple['wirkung'] == true) {
        echo "<li>" . $tuple["wirkung"] . "</li>";
    }
    if ($tuple['merkmal'] == true) {
        echo "<li>" . $tuple["merkmal"] . "</li>";
    }
    if ($tuple['bild'] == true) {
        echo "<img src='/TCM/images/" . $tuple["bild"] . "' />";
    }
    echo "</ul>";
}

include '../footer.php';

?>
