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
    
    $kraut_kat_id = $_POST["kraut_kat"];

    $sql = "UPDATE kraut
            SET
                name = '$kraut_name',
                alternativname = '$kraut_alternativname_array',
                wirkung = '$kraut_wirkungen_array',
                merkmal = '$kraut_merkmale_array'
            WHERE
                kra_id = '$kraut_id';";
                
    $result = mysqli_query($db, $sql);
   // $anzahl = mysqli_num_rows($result);
   
/*    foreach ($kraut_kat_id as $kat_id) {
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
    */


    while (ob_get_status()) 
        {
            ob_end_clean();
        }

        header("Location: /TCM/kraut/einzelkraut.php?kraut=" . $kraut_id );

?>