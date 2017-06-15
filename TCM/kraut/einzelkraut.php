<?php 
    include '../header.php';
    
    $kra_id = $_GET['kraut'];

    $sql_einzelkraut = "SELECT
                    *
                    FROM
                    kraut
                    WHERE
                    kra_id = '$kra_id';";
    $result_einzelkraut = mysqli_query($db,$sql_einzelkraut);
    $einzelkraut = mysqli_fetch_array($result_einzelkraut) or die(mysqli_error($db));
    
    $sql_bestandteilformel_id = "SELECT 
                                for_id 
                                FROM 
                                formelbestandteil 
                                WHERE 
                                kra_id =  '$kra_id';";
    $result_bestandteilformel_id = mysqli_query($db, $sql_bestandteilformel_id) or die(mysqli_error($db));
    $bestandteil_formel_id = mysqli_fetch_array($result_bestandteilformel_id);
    
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
    if ($bestandteil_formel_id == true) {
        echo "<h4>Bestandteil in Formel</h4>";
        echo "<ul>";
        foreach ($result_bestandteilformel_id as $bestandteil_formel) {
            $sql_bestandteilformel_name = "SELECT name FROM formel WHERE for_id = '" . $bestandteil_formel['for_id'] . "';";
            $result_bestandteilformel_name = mysqli_query($db, $sql_bestandteilformel_name) or die(mysqli_error($db));
            $bestandteil_formel_name = mysqli_fetch_array($result_bestandteilformel_name) or die(mysqli_error($db));
            echo "<li><a href='/TCM/formel/einzelformel.php?formel=" . $bestandteil_formel['for_id'] . "'>" . $bestandteil_formel_name['name'] . "</a></li>";
        }
        echo "</ul>";
    }
    
    echo "</ul>";
    
    
    include '../footer.php';
?>