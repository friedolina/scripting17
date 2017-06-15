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
    $result_bestandteil = mysqli_query($db, $sql_bestandteil) or die(mysqli_error($db));
    $bestandteil = mysqli_fetch_array($result_bestandteil);
    
    $sql_klasse_id = "SELECT
                    *
                    FROM
                    klassenangehoerigkeit
                    WHERE
                    for_id ='" . $_GET['formel'] . "';";
    $result_klasse_id = mysqli_query($db, $sql_klasse_id) or die(mysqli_error($db));
    $klasse_id = mysqli_fetch_array($result_klasse_id);

    echo "<div id='headline'><h1>" . $einzelformel['name'] . "</h1></div>";
    if( $klasse_id == true) {
        echo "<h4>Formelklasse</h4>";
        echo "<ul>";
        foreach($result_klasse_id as $klasse) {
            $sql_klasse_name = "SELECT name FROM klasse WHERE kla_id ='" . $klasse['kla_id'] . "';";
            $result_klasse_name = mysqli_query($db, $sql_klasse_name) or die(mysqli_error($db));
            $klasse_name = mysqli_fetch_array($result_klasse_name);
            echo "<li><a href='/TCM/formel/klasse.php?klasse=" . $klasse['kla_id'] . "'>" . $klasse_name['name'] . "</a></li>";
        }
        echo "</ul>";
    }
    
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
    if ($bestandteil == true) {
        echo "<h4>Bestandteile</h4>";
        echo "<ul>";
        foreach ($result_bestandteil as $bestandteil_kraut) {
            $sql_formelkraut_name = "SELECT name FROM kraut WHERE kra_id='" . $bestandteil_kraut['kra_id'] . "';";
            $result_formelkraut_name = mysqli_query($db,$sql_formelkraut_name) or die(mysqli_error($db));
            $formelkraut_name = mysqli_fetch_array($result_formelkraut_name);
    
            echo "<li><a href='/TCM/kraut/einzelkraut.php?kraut=" . $bestandteil_kraut['kra_id'] . "'>" . $formelkraut_name['name'] . ": </a></strong>" . $bestandteil_kraut['menge'] . ", " . $bestandteil_kraut['wichtigkeit'] . ", " . $bestandteil_kraut['funktion'] . "</li>";
        }
        echo "</ul>";
    }
    
    include '../footer.php';
?>