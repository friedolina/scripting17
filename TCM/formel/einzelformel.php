<?php 
    include '../header.php';

    $sql_einzelformel = "SELECT
                    *
                    FROM
                    formel
                    WHERE
                    for_id = '" . $_GET['formel'] . "';";
    //echo $sql_einzelformel;
    
    $result_einzelformel = mysqli_query($db,$sql_einzelformel);
    $einzelformel = mysqli_fetch_array($result_einzelformel);

    echo "<div id='headline'><h1>" . $einzelformel['name'] . "</h1></div>";
    if ( $einzelformel['anwendungsgebiet'] == true) {
        echo "<h4>Anwendungsgebiet</h4>";
        echo "<ul>";
        echo "<li>" . str_replace("#-#-#","</li><li>",$einzelformel["anwendungsgebiet"]) . "</li>";
        echo "</ul>";
    }
    if ( $einzelformel['wirkung'] == true) {
        echo "<h4>Wirkung</h4>";
        echo "<ul>";
        echo "<li>" . str_replace("#-#-#","</li><li>",$einzelformel["wirkung"]) . "</li>";
        echo "</ul>";
    }
    if ($einzelformel['notiz'] == true) {
        echo "<h4>Notiz</h4>";
        echo "<ul>";
        echo "<li>" . str_replace("#-#-#","</li><li>",$einzelformel["notiz"]) . "</li>";
        echo "</ul>";
    }
   
    echo "</ul>";
    
    
    include '../footer.php';
?>