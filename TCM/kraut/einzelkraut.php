<?php 
    include '../header.php';

    $sql_einzelkraut = "SELECT
                    *
                    FROM
                    kraut
                    WHERE
                    kra_id = '" . $_GET['kraut'] . "';";
    //echo $sql_einzelkraut;
    
    $result_einzelkraut = mysqli_query($db,$sql_einzelkraut);
    $einzelkraut = mysqli_fetch_array($result_einzelkraut);
    
    echo "<div id='headline'><h1>" . $einzelkraut['name'] . "</h1></div>";
    if ( $einzelkraut['alternativname'] == true) {
        echo "<h4>Weitere Bezeichnungen</h4>";
        echo "<ul>";
        echo "<li>" . str_replace("#-#-#","</li><li>",$einzelkraut["alternativname"]) . "</li>";
        echo "</ul>";
    }
    if ( $einzelkraut['wirkung'] == true) {
        echo "<h4>Wirkung</h4>";
        echo "<ul>";
        echo "<li>" . str_replace("#-#-#","</li><li>",$einzelkraut["wirkung"]) . "</li>";
        echo "</ul>";
    }
    if ($einzelkraut['merkmal'] == true) {
        echo "<h4>Merkmal</h4>";
        echo "<ul>";
        echo "<li>" . str_replace("#-#-#","</li><li>",$einzelkraut["merkmal"]) . "</li>";
        echo "</ul>";
    }
    if ($einzelkraut['bild'] == true) {
        echo "<h4>Bild</h4>";
        echo "<img src='/TCM/images/" . $einzelkraut["bild"] . "' />";
    }
    echo "</ul>";
    
    
    include '../footer.php';
?>