<?php
session_start();
include '../connect.php';
    if ($_SESSION['benutzername'] == FALSE) {
        echo "<p>Du kannst dich <a href='/TCM/index.php'>hier</a> einloggen.</p>";    
        exit;
    }

$kraut_clicked_string = $_GET['data'];
$sql_kraut_clicked = "SELECT kra_id from kraut where name = '$kraut_clicked_string';";
$result_kraut_clicked = mysqli_query($db, $sql_kraut_clicked) or die(mysqli_error($db));
$kraut_clicked = mysqli_fetch_array($result_kraut_clicked);

echo $kraut_clicked['kra_id'];