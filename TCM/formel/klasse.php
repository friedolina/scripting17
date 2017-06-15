<?php
    include('../header.php');

    $kla_id = $_GET['klasse'];
    $sql_klasse = "SELECT
                    *
                    FROM
                    klasse
                    WHERE
                    kla_id = '$kla_id';";
    $result_klasse = mysqli_query($db, $sql_klasse) or die(mysqli_error($db));
    $klasse = mysqli_fetch_array($result_klasse);
    
    $sql_klassenformel_id = "SELECT
                            for_id
                            FROM
                            klassenangehoerigkeit
                            WHERE
                            kla_id = '" . $klasse['kla_id'] . "';";
    $result_klassenformel_id = mysqli_query($db, $sql_klassenformel_id) or die(mysqli_error($db));
    $klassenformel_id = mysqli_fetch_array($result_klassenformel_id);
    
    echo "<h1>" . $klasse['name'] . "</h1>";
    echo "<ul>";
    foreach ($result_klassenformel_id as $formel) {
        $sql_klassenformel_name = "SELECT
                            name
                            FROM
                            formel
                            WHERE
                            for_id = '" . $formel['for_id'] . "';";
        $result_klassenformel_name = mysqli_query($db, $sql_klassenformel_name) or die(mysqli_error($db));
        $klassenformel_name = mysqli_fetch_array($result_klassenformel_name);
        echo "<li><a href='/TCM/formel/einzelformel.php?formel=" . $formel['for_id'] . "'>" . $klassenformel_name['name'] . "</a></li>";
    }
    echo "</ul>";
    
    include('../footer.php');
?>