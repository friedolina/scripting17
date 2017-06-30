<?php 
    session_start();
    include '../connect.php';
    include '../filterinput.php';
    if ($_SESSION['benutzername'] == FALSE) {
        echo "<p>Du kannst dich <a href='/TCM/index.php'>hier</a> einloggen.</p>";    
        exit;
    }

    ob_start();

    $kraut_id = $_POST['kraut_id'];
    $kraut_name = test_input($_POST["kraut_name"]);
    $kraut_alternativname = $_POST["kraut_alternativname"];
    $kraut_alternativname_array = test_input(implode("#-#-#", array_filter($kraut_alternativname)));
    $kraut_wirkungen = $_POST["kraut_wirkungen"];
    $kraut_wirkungen_array = test_input(implode("#-#-#", array_filter($kraut_wirkungen)));
    $kraut_merkmale = $_POST["kraut_merkmale"];
    $kraut_merkmale_array = test_input(implode("#-#-#", array_filter($kraut_merkmale)));
    $delete_bild = $_POST["delete_bild"];
    $kraut_kat_id = $_POST["kraut_kat"];


    if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
        if ($delete_bild == "delete") {
            $sql_bildname = "SELECT bild FROM kraut WHERE kra_id = '$kraut_id';";
            $result_bildname = mysqli_query($db, $sql_bildname);
            $bildname = mysqli_fetch_array($result_bildname);
            unlink('../images/' . $bildname['bild']);
            
            $einzigartiger_dateiname = null;
        } else {
            $sql_bild_behalten = "SELECT bild FROM kraut WHERE kra_id = '$kraut_id';";
            $result_bild_behalten = mysqli_query($db, $sql_bild_behalten);
            $bild_behalten = mysqli_fetch_array($result_bild_behalten);
            $einzigartiger_dateiname = $bild_behalten['bild'];
        }
    } else {
        include 'bild_speichern.php';
    }

    if ($kraut_id) {
        /************** KRAUT BEARBEITEN ***********/
        

        $sql = "UPDATE kraut
            SET
                name = '$kraut_name',
                alternativname = '$kraut_alternativname_array',
                wirkung = '$kraut_wirkungen_array',
                merkmal = '$kraut_merkmale_array',
                bild = '$einzigartiger_dateiname'
            WHERE
                kra_id = '$kraut_id';";
                
        $result = mysqli_query($db, $sql);

        $sql_delete_kat = "DELETE FROM
                kategorieangehoerigkeit
                WHERE
                kra_id = '$kraut_id';";
        $result_delete_kat = mysqli_query($db, $sql_delete_kat);
        $kra_id['kra_id'] = $kraut_id;
        
    } else {
        /************** KRAUT HINZUFÜGEN **********/

        
        $sql = "INSERT INTO kraut
                (
                    name,
                    alternativname,
                    wirkung,
                    merkmal,
                    bild
                )
                VALUES
                (
                    '$kraut_name',
                    '$kraut_alternativname_array',
                    '$kraut_wirkungen_array',
                    '$kraut_merkmale_array',
                    '$einzigartiger_dateiname'
                )";
                    
        $result = mysqli_query($db, $sql);
       // $anzahl = mysqli_num_rows($result);
       
        $sql_kra_id = "SELECT kra_id FROM kraut WHERE name = '" . $kraut_name . "';";
        //echo $sql_kat_id . "<br>";    
        $result_kra_id = mysqli_query($db, $sql_kra_id);
        $kra_id = mysqli_fetch_array($result_kra_id);
    }
        if ($kraut_kat_id !== null) {
        foreach ($kraut_kat_id as $kat_id) {
            $sql_angehoerigkeit = "
                    INSERT INTO 
                        kategorieangehoerigkeit 
                        (
                            kat_id, 
                            kra_id
                        ) VALUES (
                            '" . $kat_id . "', 
                            '" . $kra_id['kra_id'] . "'
                        );";
            mysqli_query($db, $sql_angehoerigkeit) or die(mysqli_error($db));
        }
            
        }
    
    while (ob_get_status()) 
        {
            ob_end_clean();
        }

        header("Location: /TCM/kraut/einzelkraut.php?kraut=" . $kra_id['kra_id'] ); 

?>