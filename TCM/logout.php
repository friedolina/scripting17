<?php
    session_start();
    include 'connect.php';
    include 'filterinput.php';
    ob_start();
    if ($_SESSION['benutzername'] == FALSE) {
        echo "<p>Du kannst dich <a href='/TCM/index.php'>hier</a> einloggen.</p>";    
        exit;
    }

session_destroy();


 while (ob_get_status()) 
        {
            ob_end_clean();
        }

        header("Location: /TCM/index.php");

?>
