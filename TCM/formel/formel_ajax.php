<?php
session_start();
include '../connect.php';
    if ($_SESSION['benutzername'] == FALSE) {
        echo "<p>Du kannst dich <a href='/TCM/index.php'>hier</a> einloggen.</p>";    
        exit;
    }
                    
$formelkrautString = $_GET['formelkrautString'];
$sql_formelkraut_ajax = "SELECT name, alternativname, kra_id FROM kraut WHERE name LIKE '%$formelkrautString%' ORDER BY name ASC;";
$result_formelkraut_ajax = mysqli_query($db,$sql_formelkraut_ajax) or die(mysqli_error($db));



if(strlen($formelkrautString) >= 1) {
    $output = "<ul>";
	foreach($result_formelkraut_ajax as $formelkraut_data) {
        if(stristr($formelkraut_data['name'], $formelkrautString)) {
                $output_formelkraut .= "<li><a class='formelkraut_auswahl'>" . $formelkraut_data['name'];
                $output_formelkraut .= "</a></li>";
        }
    }
    $output .= $output_formelkraut . "</ul>";
}


echo $output;

?>