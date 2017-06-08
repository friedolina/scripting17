<?php 
    include '../header.php';


$kategorie_name = $_POST['kategorie_name'];
//echo "Kategorie-Name: " . $kategorie_name . "<br>";
$kat_kraut_id = $_POST['kat_kraut'];
$kat_kraut_string = implode(",",$kat_kraut_id);
//echo "Kräuter: " . $kat_kraut_string . "<br>";

$sql_kat_name = "INSERT INTO kategorie (name) VALUES ('" . $kategorie_name . "');";
//echo $sql_kat_name . "<br>";
$result_kat_name = mysqli_query($db, $sql_kat_name);

$sql_kat_id = "SELECT kat_id FROM kategorie WHERE name = '" . $kategorie_name . "';";
//echo $sql_kat_id . "<br>";
$result_kat_id = mysqli_query($db, $sql_kat_id);
$kat_id = mysqli_fetch_array($result_kat_id);


foreach ($kat_kraut_id as $kraut_id) {
    $sql_angehoerigkeit = "INSERT INTO kategorieangehoerigkeit (kat_id, kra_id) VALUES ('" . $kat_id['kat_id'] . "', '" . $kraut_id . "');";
    //echo $sql_angehoerigkeit;
    mysqli_query($db, $sql_angehoerigkeit);
}

echo "<div id='headline'><h2>" . $kategorie_name . "</h2></div>";

echo "<ul>";
foreach ($kat_kraut_id as $kraut_id) {
    $sql_kraut_name = "SELECT name FROM kraut WHERE kra_id = '" . $kraut_id . "';";
    $result_kraut_name = mysqli_query($db, $sql_kraut_name);
    $kat_kraut_name = mysqli_fetch_array($result_kraut_name);
    
    echo "<li>" . $kat_kraut_name['name'] . "</li>";
}

echo "</ul>";



    include '../footer.php';
?>