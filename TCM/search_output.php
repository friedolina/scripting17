<?php 
    include 'header.php';

    
//<div id="headline"><h1>Suchergebnisse</h1></div>
    
    //$search_form_output  = $_GET['search_form'];
    $sql_suche_kraut = "SELECT
                    *
                    FROM
                    kraut
                    WHERE
                    name = '" . $_POST['search_form'] . "';";
    echo $sql_suche_kraut;
    $result_suche_kraut = mysqli_query($db,$sql_suche_kraut);
    $suche_kraut=mysqli_fetch_array($result_suche_kraut);
    
    if (mysqli_num_rows($result_suche_kraut) == 0) {
        echo "<h5>Kraut nicht gefunden.</h5>";
        echo "<br>";
    } else {
        echo "<div id='headline'><h1>" . $suche_kraut['name'] . "</h1></div>";
    //echo "<h3>" . $kraut["kra_id"] . ". " . $kraut["name"] . "</h3>";
        if ( $suche_kraut['wirkung'] == true) {
            echo "<h4>Wirkung</h4>";
            echo "<ul>";
            echo "<li>" . str_replace("#-#-#","</li><li>",$suche_kraut["wirkung"]) . "</li>";
            echo "</ul>";
        }
        if ($suche_kraut['merkmal'] == true) {
            echo "<h4>Merkmal</h4>";
            echo "<ul>";
            echo "<li>" . str_replace("#-#-#","</li><li>",$suche_kraut["merkmal"]) . "</li>";
            echo "</ul>";
        }
        if ($suche_kraut['bild'] == true) {
            echo "<h4>Bild</h4>";
            echo "<img src='/TCM/images/" . $suche_kraut["bild"] . "' />";
        }
        echo "</ul>";
    }
    

                            
                            
                            
                    //Check if input is numeric and it has 10 digit
                   //if(is_numeric($search_form_output) && strlen($search_form_output)==10)  {
                    /**        
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
                }**/
            
  
    include 'footer.php';
?>