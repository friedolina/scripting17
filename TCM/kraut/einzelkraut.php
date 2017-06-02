<?php 
    include '../header.php';

    
    /**<div id="headline"><h2>Suchergebnisse</h2></div-->**/
    
    echo "<ul>";
    echo "<h3>" . $kraut["kra_id"] . ". " . $kraut["name"] . "</h3>";
    if ( $kraut['wirkung'] == true) {
        echo "<li>" . str_replace(" -- ","</li><li>",$kraut["wirkung"]) . "</li>";
    }
    if ($kraut['merkmal'] == true) {
        echo "<li>" . str_replace(" -- ","</li><li>",$kraut["merkmal"]) . "</li>";
    }
    if ($kraut['bild'] == true) {
        echo "<img src='/TCM/images/" . $kraut["bild"] . "' />";
    }
    echo "</ul>";
    
    
    include '../footer.php';
?>