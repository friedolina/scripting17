<?php 
    include '../header.php';
    include '../filterinput.php';
    if ($_SESSION['benutzername'] == FALSE) {
        echo "<p>Du kannst dich <a href='/TCM/index.php'>hier</a> einloggen.</p>";    
        exit;
    }


$klasse_name = test_input($_POST['klasse_name']);
$klasse_formel_id = $_POST['klasse_formel'];
$klasse_formel_string = implode(",",$klasse_formel_id);

$sql_kla_name = "INSERT INTO klasse (name) VALUES ('" . $klasse_name . "');";
$result_kla_name = mysqli_query($db, $sql_kla_name) or die(mysqli_error($db));

$sql_kla_id = "SELECT kla_id FROM klasse WHERE name = '" . $klasse_name . "';";
$result_kla_id = mysqli_query($db, $sql_kla_id) or die(mysqli_error($db));
$kla_id = mysqli_fetch_array($result_kla_id) or die(mysqli_error($db));


foreach ($klasse_formel_id as $formel_id) {
    $sql_angehoerigkeit = "INSERT INTO klassenangehoerigkeit (kla_id, for_id) VALUES ('" . $kla_id['kla_id'] . "', '" . $formel_id . "');";
    mysqli_query($db, $sql_angehoerigkeit) or die(mysqli_error($db));
}

echo "<div id='headline'><h1>" . $klasse_name . "</h1></div>";

echo "<ul>";
foreach ($klasse_formel_id as $formel_id) {
    $sql_formel_name = "SELECT name FROM formel WHERE for_id = '" . $formel_id . "';";
    $result_formel_name = mysqli_query($db, $sql_formel_name) or die(mysqli_error($db));
    $kla_formel_name = mysqli_fetch_array($result_formel_name) or die(mysqli_error($db));
    
    echo "<li>" . $kla_formel_name['name'] . "</li>";
}

echo "</ul>";



    include '../footer.php';
?>