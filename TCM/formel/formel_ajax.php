<?php

include '../connect.php';
                    
$formelkrautString = $_GET['formelkrautString'];
$sql_formelkraut_ajax = "SELECT name, alternativname, kra_id FROM kraut WHERE name LIKE '%$formelkrautString%' ORDER BY name ASC;";
$result_formelkraut_ajax = mysqli_query($db,$sql_formelkraut_ajax) or die(mysqli_error($db));

$output = "<ul>";

if(strlen($formelkrautString) >= 1) {
    
   // $output_formelkraut = $formelkrautString;
    
	foreach($result_formelkraut_ajax as $formelkraut_data) {
        if(stristr($formelkraut_data['name'], $formelkrautString)) {
                // or stristr($formelkraut_data['alternativname'], $formelkrautString)
                $output_formelkraut .= "<li class='kraut_auswahl'><a href='#'>" . $formelkraut_data['name'];
                //if ($kraut['alternativname'] !== NULL) {
                //    $output_formelkraut .= " / " . $formelkraut_data['alternativname'];
                //}
                $output_formelkraut .= "</a></li>";
         // elseif(stristr($formelkraut_data['alternativname'], $formelkrautString)) {
            //    $output_formelkraut .= "<li class='kraut_auswahl'><a href='/TCM/kraut/einzelkraut.php?kraut=" . $formelkraut_data['kra_id'] . "'>" . $formelkraut_data['alternativname'] . "</a></li>";
            //}
        }
	}
}

$output .= $output_formelkraut . "</ul>";
echo $output;

?>