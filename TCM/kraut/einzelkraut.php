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
    echo "<div id='headline'><h2>" . $einzelkraut['name'] . "</h2></div>";
    echo "<ul>";
    //echo "<h3>" . $kraut["kra_id"] . ". " . $kraut["name"] . "</h3>";
    if ( $einzelkraut['wirkung'] == true) {
        echo "<h4>Wirkung</h4>";
        echo "<li>" . str_replace(" -- ","</li><li>",$einzelkraut["wirkung"]) . "</li>";
    }
    if ($einzelkraut['merkmal'] == true) {
        echo "<h4>Merkmal</h4>";
        echo "<li>" . str_replace(" -- ","</li><li>",$einzelkraut["merkmal"]) . "</li>";
    }
    if ($einzelkraut['bild'] == true) {
        echo "<h4>Bild</h4>";
        echo "<img src='/TCM/images/" . $einzelkraut["bild"] . "' />";
    }
    echo "</ul>";
    
    
    include '../footer.php';
?>