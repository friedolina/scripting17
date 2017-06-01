<?php 
    include 'header.php';
?>
    
    <div id="headline"><h2>Suchergebnisse</h2></div>
        <?php
                $search_form_output  = $_POST['search_form'];
                            
                    //Check if input is numeric and it has 10 digit
                   //if(is_numeric($search_form_output) && strlen($search_form_output)==10)  {
                            
                    $sql ="Select * from kraut WHERE name= '" . $search_form_output . "'";
                    $result = mysqli_query($db, $sql);
                    $row=mysqli_fetch_array($result);
                                    
                    if (mysqli_num_rows($result) == 0)
                    {
                        echo "<h5>Kraut nicht gefunden.</h5>";
                        echo "<br>";
                     }
                    else{
                        echo "<div id='headline'><h2>" . $row['kra_id'] . ". " . $row['name'] . "</h2></div>";
                        echo "<h3>Merkmal und Wirkung</h3>";
                        echo "<p>" . $row['wirkung'] . "</p>";
                        echo "<p>" . $row['merkmal'] . "</p><br />";
                    if ($row['bild'] == true) {
                        echo "<img src='images/" . $row['bild'] . "' />";

                    } else { 
                        echo "<p>Kein Bild verfügbar.</p>";
                    }
                }
            ?>
<?php    
    include 'footer.php';
?>