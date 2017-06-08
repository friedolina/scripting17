<!DOCTYPE html>

        <?php
            include 'connect.php';
            
            $sql_kraut = "SELECT
            name, kra_id
            FROM
            kraut";
            
            $result_kraut = mysqli_query($db, $sql_kraut);
            
            $sql_kat = "SELECT
            name, kat_id
             FROM 
            kategorie";
            
            $result_kat = mysqli_query($db, $sql_kat);
            
            //$sql_kat_angehoerigkeit = "SELECT kra_id, kat_id FROM kategorieangehoerigkeit;";
            
            //$result_kat_angehoerigkeit = mysqli_query($db, $sql_kat_angehoerigkeit);
            
            $sql_formel = "SELECT
            name, for_id
            FROM
            formel";
            
            $result_formel = mysqli_query($db, $sql_formel);
            
            $sql_klasse = "SELECT
            name, forkla_id
            FROM
            formelklasse";
            
            $result_klasse = mysqli_query($db, $sql_klasse);
            
            $alph = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $alph_array = range('A', 'Z');

        ?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/TCM/script/buttonUp.js"></script>
        <script src="/TCM/script/addInput.js" language="Javascript" type="text/javascript"></script>
        <script src="/TCM/script/eintragBearbeiten.js" language="Javascript" type="text/javascript"></script>
        <script src="/TCM/script/bootstrap.js" language="Javascript" type="text/javascript"></script>
        <!--script src="/TCM/script/bootstrap.min.js" language="Javascript" type="text/javascript"></script-->
        <script src="/TCM/script/npm.js" language="Javascript" type="text/javascript"></script>
        <title>TCM-Kräuterlexikon</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/TCM/style/bootstrap.css">   
        <!--link rel="stylesheet" href="/TCM/style/bootstrap.min.css"-->   
        <link rel="stylesheet" href="/TCM/style/style.css">   
    </head>    
    <body>
        
     <!-- Demo navbar -->
    <div class="navbar yamm navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/TCM/index.php">TCM</a>
        </div>
        <div id="navbar-collapse-1" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <!-- Accordion demo -->
            <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Anzeigen<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div id="accordion" class="panel-group scrollable-menu">
                        <!-- KRÄUTER ALPHABETISCH --> 
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Alle Kräuter alphabetisch</a></h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php
                                    echo "<div class='row'>";  
                                    $j = 0;
                                    foreach(range('A','Z') as $i) {
                                        if ($j !== 0 && $j % 6 == 0) {
                                            echo "</div><div class='row'>";
                                        }
                                        if(strpos($alph, $i) !== FALSE) {
                                            echo "<ul class='col-sm-2 list-unstyled'>";
                                            echo "<h4>" . $i . "</h4>";
                                            $j++;
                                            foreach($result_kraut as $kraut) {
                                                if (substr($kraut['name'], 0, 1) == $i) {
                                                    echo "<li><a href='/TCM/kraut/einzelkraut.php?kraut=" . $kraut['kra_id'] . "'>" . $kraut['name'] . "</a></li>";
                                                }
                                            }
                                            echo "</ul>";
                                        }
                                    }
                                    echo "</div>";
                                ?>
                              
                            </div>
                          </div>
                        </div>  
                        
                        <!-- KRÄUTER KATEGORIEN -->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Alle Kräuter nach Kategorien</a></h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                              <?php
                                    echo "<div class='row'>";  
                                    $j = 0;
                                    foreach($result_kat as $kat) {
                                        
                                        $sql_angehoerigkeit_id = "SELECT kra_id FROM kategorieangehoerigkeit WHERE kat_id = " . $kat['kat_id'] . ";";
                                        $result_angehoerigkeit_id = mysqli_query($db, $sql_angehoerigkeit_id);  
                                        
                                        if ($j !== 0 && $j % 6 == 0) {
                                            echo "</div><div class='row'>";
                                        }
                                        
                                        echo "<ul class='col-sm-2 list-unstyled'>";
                                        echo "<h4>" . $kat['name'] . "</h4>";
                                        $j++;
                                        foreach($result_angehoerigkeit_id as $angehoerigkeit_id) {
                                            $sql_angehoerigkeit_name = "SELECT name FROM kraut WHERE kra_id = " . $angehoerigkeit_id['kra_id'] . ";";
                                            $result_angehoerigkeit_name = mysqli_query($db, $sql_angehoerigkeit_name);
                                            $angehoerigkeit_name = mysqli_fetch_array($result_angehoerigkeit_name);

                                            echo "<li><a href='/TCM/kraut/einzelkraut.php?kraut=" . $angehoerigkeit_id['kra_id'] . "'>" . $angehoerigkeit_name['name'] . "</a></li>";
                                        }
                                        echo "</ul>";
                                    }
                                    
                                    echo "</div>";
                                    
                            
                                ?>
                              
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Alle Formeln alphabetisch</a></h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php
                                    echo "<div class='row'>";  
                                    $j = 0;
                                    foreach(range('A','Z') as $i) {
                                        if ($j !== 0 && $j % 6 == 0) {
                                            echo "</div><div class='row'>";
                                        }
                                        if(strpos($alph, $i) !== FALSE) {
                                            echo "<ul class='col-sm-2 list-unstyled'>";
                                            echo "<h4>" . $i . "</h4>";
                                            $j++;
                                            foreach($result_formel as $formel) {
                                                if (substr($formel['name'], 0, 1) == $i) {
                                                    echo "<li>" . $formel['name'] . "</li>";
                                                }
                                            }
                                            echo "</ul>";
                                        }
                                    }
                                    echo "</div>";
                                ?>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Alle Formeln nach Klassen</a></h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                              <?php
                                  while ( $klasse = mysqli_fetch_assoc($result_klasse)) {
                                    echo "<ul class='col-sm-2 list-unstyled'>";
                                    echo "<li><h4>" . $klasse[name] . "</h4></li>";
                                    echo "<li>Eins</li>";
                                    echo "<li>Zwei</li>";
                                    echo "<li>Drei</li>";
                                    echo "</ul>";
                                    
                                  }
                                ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Classic dropdown -->
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Hinzufügen<b class="caret"></b></a>
              <ul role="menu" class="dropdown-menu">
                <li><a href="/TCM/kraut/kraut_eingabe.php">Kraut</a></li>
                <li><a href="/TCM/kraut/kategorie_eingabe.php">Krautkategorie</a></li>
                <li><a href="/TCM/formel/formel_eingabe.php">Formel</a></li>
                <!--li class="divider"></li-->
                <li><a href="/TCM/formel/klasse_eingabe.php">Formelklasse</a></li>
              </ul>
            </li>
            <!-- Pictures -->
            <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pictures<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src=""></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src=""></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src=""></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src=""></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src=""></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src=""></a></div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" method="POST" action="/TCM/search_output.php">
                <div class="form-group">
                    <!--label for="input_search"></label-->
                    <input type="text" class="form-control" name="search_form" maxlength="150" placeholder="Suche...">
                    <!--span class="help-block"></span-->
                    <button type="submit" class="btn btn-default" name="submit" >Suche</button>
                </div>
            </form>
        </div>
      </div>
    </div>
        
        <div id="content_container">
            
            <!--div id="header"><h1>TCM-Kräuterlexikon</h1></div-->
