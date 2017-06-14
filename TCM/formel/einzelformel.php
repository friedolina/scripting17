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
    
    $sql_bestandteil = "SELECT
                        *
                        FROM
                        formelbestandteil
                        WHERE
                        for_id = '" . $_GET['formel'] . "';";
    echo $sql_bestandteil;
    $result_bestandteil = mysqli_query($db, $sql_bestandteil) or die(mysqli_error($db));
    $bestandteil = mysqli_fetch_array($result_bestandteil);

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
    echo "<h4>Bestandteile</h4>";
    foreach ($result_bestandteil as $bestandteil_kraut) {
        $sql_formelkraut_name = "SELECT name FROM kraut WHERE kra_id='" . $bestandteil_kraut['kra_id'] . "';";
        $result_formelkraut_name = mysqli_query($db,$sql_formelkraut_name) or die(mysqli_error($db));
        $formelkraut_name = mysqli_fetch_array($result_formelkraut_name);

        echo "<ul>";
        echo "<li><strong>" . $formelkraut_name['name'] . ": </strong>" . $bestandteil_kraut['menge'] . ", " . $bestandteil_kraut['wichtigkeit'] . ", " . $bestandteil_kraut['funktion'] . "</li>";
        echo "</ul>";
    }

    include '../footer.php';
?>