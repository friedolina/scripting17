
<?php

include 'connect.php';
                    
$searchString = $_GET['searchString'];
$sql_kraut_ajax = "SELECT 'KRAUT' AS source, name, kra_id FROM kraut WHERE name LIKE '%$searchString%' ORDER BY name ASC;";
$result_kraut_ajax = mysqli_query($db,$sql_kraut_ajax) or die(mysqli_error($db));

$sql_formel_ajax = "SELECT 'FORMEL' AS source, name, for_id FROM formel WHERE name LIKE '%$searchString%' ORDER BY name ASC;";
$result_formel_ajax = mysqli_query($db, $sql_formel_ajax) or die(mysqli_error($db));

$output = "<ul>";

if(strlen($searchString) >= 2) {
    $output_kraut = "<h4>Kräuter:</h4>";
	foreach($result_kraut_ajax as $kraut_data) {
        if ($kraut_data['source'] == "KRAUT") {
            if(stristr($kraut_data['name'],$searchString)) {
                $output_kraut .= "<li><a href='/TCM/kraut/einzelkraut.php?kraut=" . $kraut_data['kra_id'] . "'>" . $kraut_data['name'] . "</a></li>";
            } 
        }
	}
//	unset($data);
	$output_formel = "<h4>Formeln:</h4>";
	foreach($result_formel_ajax as $formel_data) {
        if ($formel_data['source'] == "FORMEL") {
            if(stristr($formel_data['name'],$searchString)) {
                $output_formel .= "<li><a href='/TCM/formel/einzelformel.php?formel=" . $formel_data['for_id'] . "'>" . $formel_data['name'] . "</a></li>";
            }
        }
    }
//    unset($data);
}

$output .= $output_kraut . $output_formel . "</ul>";
echo $output;

include 'footer.php';
?>