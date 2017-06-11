
<?php

include 'connect.php';
                    
$field1 = "name";
$table1 = "kraut";
$table2 = "formel";
$searchString = $_GET['searchString'];
$sql_ajax = "(SELECT $field1 FROM $table1 WHERE name LIKE '%$searchString%')
               UNION ALL
                (SELECT $field1 FROM $table2 WHERE name LIKE '%$searchString%');";
$result_ajax = mysqli_query($db,$sql_ajax) or die(mysqli_error($db));

$output = "<ul>";

if($searchString != "") {
 
	foreach($result_ajax as $data) {

        if(stristr($data[$field1],$searchString)) {
        	$output .= "<li>".$data[$field1] ."</li>";
        }
	}
}

$output .= "</ul>";
echo $output;

include 'footer.php';
?>