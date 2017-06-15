<?php
    include('../header.php');
    $kat_id = $_GET['kategorie'];
    
    $sql_kategorie = "SELECT
                        name
                        FROM
                        kategorie
                        WHERE
                        kat_id = '$kat_id';";
    $result_kategorie = mysqli_query($db, $sql_kategorie) or die(mysqli_error($db));
    $kategorie = mysqli_fetch_array($result_kategorie);
    
    $sql_kategoriekraut_id = "SELECT
                        kra_id
                        FROM
                        kategorieangehoerigkeit
                        WHERE
                        kat_id = '$kat_id';";
    $result_kategoriekraut_id = mysqli_query($db, $sql_kategoriekraut_id) or die(mysqli_error($db));
    
    
    echo "<h1>" . $kategorie['name'] . "</h1>";
    echo "<ul>";
    foreach ($result_kategoriekraut_id as $kraut) {
        $sql_kategoriekraut_name = "SELECT
                        name
                        FROM
                        kraut
                        WHERE
                        kra_id = '" . $kraut['kra_id'] . "';";
        $result_kategoriekraut_name = mysqli_query($db, $sql_kategoriekraut_name) or die(mysqli_error($db));
        $kategoriekraut_name = mysqli_fetch_array($result_kategoriekraut_name);
        echo "<li><a href='/TCM/kraut/einzelkraut.php?kraut=" . $kraut['kra_id'] . "'>" . $kategoriekraut_name['name'] . "</a></li>";
    }
    echo "</ul>";
    
    
    include('../footer.php');
?>