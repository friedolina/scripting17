<?php 
    include '../header.php';

    $sql_einzelkraut = "SELECT
                    *
                    FROM
                    kraut
                    WHERE
                    name = '" . $_GET['kraut'] . "';";
    //echo $sql_einzelkraut;
    
    $result_einzelkraut = mysqli_query($db,$sql_einzelkraut);
    $einzelkraut=mysqli_fetch_array($result_einzelkraut);
    
    //echo $einzelkraut['name'];
    
    //echo $_GET['kraut'];
    echo "<div id='headline'><h1>" . $einzelkraut['name'] . "</h1></div>";
    //echo "<h3>" . $kraut["kra_id"] . ". " . $kraut["name"] . "</h3>";
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