<?php 
    include '../connect.php';
    include '../filterinput.php';
    ob_start();
    
    $formel_name = test_input($_POST["formel_name"]);
    $formel_wirkungen = $_POST["formel_wirkungen"];
    $formel_wirkungen_array = test_input(implode("#-#-#", $formel_wirkungen));
    $formel_anwendungsgebiete = $_POST["formel_anwendungsgebiete"];
    $formel_anwendungsgebiete_array = test_input(implode("#-#-#", $formel_anwendungsgebiete));
    $formel_notizen = $_POST["formel_notizen"];
    $formel_notizen_array = test_input(implode("#-#-#", $formel_notizen));
    $formel_klasse_id = $_POST["formel_klasse"];
    $formelkraut_name = $_POST["formelkraut_name"];
    $formelkraut_menge = test_input($_POST["formelmenge_eingabe"]);
    $formelkraut_wichtigkeit = test_input($_POST["wichtigkeit"]);
    $formelkraut_funktion = test_input($_POST["funktion_eingabe"]);
        
    //print_r($_POST);
    
    $sql = "INSERT INTO formel
            (
                name,
                anwendungsgebiet,
                wirkung,
                notiz
            )
            VALUES
            (
                '$formel_name',
                '$formel_anwendungsgebiete_array',
                '$formel_wirkungen_array',
                '$formel_notizen_array'
            )";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
   // $anzahl = mysqli_num_rows($result);
   
    $sql_for_id = "SELECT for_id FROM formel WHERE name = '" . $formel_name . "';";
    $result_for_id = mysqli_query($db, $sql_for_id) or die(mysqli_error($db));
    $for_id = mysqli_fetch_array($result_for_id);
   
   foreach ($formel_klasse_id as $kla_id) {
        $sql_angehoerigkeit = "INSERT INTO klassenangehoerigkeit (kla_id, for_id) VALUES ('" . $kla_id . "', '" . $for_id['for_id'] . "');";
        mysqli_query($db, $sql_angehoerigkeit) or die(mysqli_error($db));
    }

    $val = 0;    
    foreach ($formelkraut_name as $formelkraut) {
        $sql_formelkraut_kra_id = "SELECT kra_id FROM kraut WHERE name='" . $formelkraut . "';";
        $result_formelkraut_kra_id = mysqli_query($db,$sql_formelkraut_kra_id) or die(mysqli_error($db));
        $formelkraut_kra_id = mysqli_fetch_array($result_formelkraut_kra_id);

        $sql_formelkraut = "INSERT INTO formelbestandteil
                            (
                            kra_id,
                            for_id,
                            menge,
                            wichtigkeit,
                            funktion
                            )
                            VALUES
                            ('" . $formelkraut_kra_id['kra_id'] . "',
                            '" . $for_id['for_id'] . "',
                            '" . $formelkraut_menge[$val] . "',
                            '$formelkraut_wichtigkeit[$val]',
                            '$formelkraut_funktion[$val]'
                            )";
        $val ++;
        $result_formelkraut = mysqli_query($db, $sql_formelkraut) or die(mysqli_error($db));
    }

    while (ob_get_status()) 
        {
            ob_end_clean();
        }

        header("Location: /TCM/formel/einzelformel.php?formel=" . $for_id['for_id'] );


?>

