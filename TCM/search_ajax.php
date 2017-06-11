
<?php

include 'connect.php';

$searchString = $_GET['searchString'];
$result = mysqli_query($db,"select name from kraut WHERE name LIKE '%$searchString%'") or die(mysqli_error($db));

$data = mysqli_fetch_array($result);

$result_out = "<ul>";

if($searchString != "") {
 
	  for($i=0; $i < count($data); $i++) {
        $found = stristr($data[$i],$searchString);
     
    	if($found) {
    		$result_out .= "<li>".$data[$i]."</li>";
    	}
	  }
}

$result_out .= "</ul>";
echo $result_out;


/**
echo "<table border='1' >
<tr>
<td align=center> <b>Kraut-ID</b></td>
<td align=center><b>Name</b></td>
<td align=center><b>Address</b></td>
<td align=center><b>Stream</b></td></td>
<td align=center><b>Status</b></td>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "<td align=center>$data[4]</td>";
    echo "</tr>";
}
echo "</table>";
**/


include 'footer.php';
?>