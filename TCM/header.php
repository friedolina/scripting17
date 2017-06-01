<!DOCTYPE html>

        <?php
            include 'connect.php';
            
            $sql_kraut = "SELECT
            name
            FROM
            kraut";
            
            $result_kraut = mysqli_query($db, $sql_kraut);
            
            $sql_kat = "SELECT
            name
             FROM 
            kategorie";
            
            $result_kat = mysqli_query($db, $sql_kat);
            
            $sql_klasse = "SELECT
            name
            FROM
            formelklasse";
            
            $result_klasse = mysqli_query($db, $sql_klasse);
            
            $alph = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

?>
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
        
    <!-- VERSUCH MEGA MENU + MULTILEVEL MENU -->
    
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
            <!-- Classic list -->
            <!--li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">List<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <!-- Content container to add padding -->
                  <!--div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-2 list-unstyled">
                        <li>
                          <p><strong>Section Title</strong></p>
                        </li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                      </ul>
                      <ul class="col-sm-2 list-unstyled">
                        <li>
                          <p><strong>Links Title</strong></p>
                        </li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                      </ul>
                      <ul class="col-sm-2 list-unstyled">
                        <li>
                          <p><strong>Section Title</strong></p>
                        </li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                      </ul>
                      <ul class="col-sm-2 list-unstyled">
                        <li>
                          <p><strong>Section Title</strong></p>
                        </li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>
                          <ul>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </li-->
            <!-- Accordion demo -->
            <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Anzeigen<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div id="accordion" class="panel-group scrollable-menu">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Alle Kräuter alphabetisch</a></h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php
                                      
                                    foreach(range('A','Z') as $i) {
                                        if(strpos($alph, $i) !== FALSE) {
                                            echo "<ul class='col-sm-2 list-unstyled'>";
                                            echo "<h4>" . $i . "</h4>";
                                            foreach($result_kraut as $kraut) {
                                                if (substr($kraut['name'], 0, 1) == $i) {
                                                    echo "<li>" . $kraut['name'] . "</li>";
                                                } elseif (substr($kraut['name'], 0, 1) == FALSE) {
                                                    echo "<li>Zwei</li>";
                                                    echo "<li>Drei</li>";
                                                }
                                            }
                                        }
                                    }
                                ?>
                              
                            </div>
                          </div>
                        </div>  
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Alle Kräuter nach Kategorien</a></h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                              <?php
                                  while ( $kat = mysqli_fetch_assoc($result_kat)) {
                                    echo "<ul class='col-sm-2 list-unstyled'>";
                                    echo "<li><h4>" . $kat[name] . "</h4></li>";
                                    echo "<li>Eins</li>";
                                    echo "<li>Zwei</li>";
                                    echo "<li>Drei</li>";
                                    echo "</ul>";
                                    
                                  }
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
                                      
                                    foreach(range('A','Z') as $i) {
                                        if(strpos($alph, $i) !== FALSE) {
                                            echo "<ul class='col-sm-2 list-unstyled'>";
                                            echo "<h4>" . $i . "</h4>";
                                            echo "<li>Eins</li>";
                                            echo "<li>Zwei</li>";
                                            echo "<li>Drei</li>";
                                            echo "</ul>";
                                        }
                                    }
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
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Classic<b class="caret"></b></a>
              <ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="#"> Action </a></li>
                <li><a tabindex="-1" href="#"> Another action </a></li>
                <li><a tabindex="-1" href="#"> Something else here </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"> Separated link </a></li>
              </ul>
            </li>
            <!-- Pictures -->
            <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pictures<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="demo/img/190.jpg"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="demo/img/190.jpg"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="demo/img/190.jpg"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="demo/img/190.jpg"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="demo/img/190.jpg"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="demo/img/190.jpg"></a></div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
                  <form class="navbar-form navbar-left" method="POST" action="/TCM/search_output.php">
                            <div class="form-group">
                                <!--label for="input_search"></label-->
                                <input type="text" class="form-control" required="required" name="search_form" maxlength="150" placeholder="Suche...">
                                <!--span class="help-block"></span-->
                                <button type="submit" class="btn btn-default" name="submit" >Suche</button>

                            </div>
        </div>
      </div>
    </div>
        
        <div id="content_container">
            
            <div id="header"><h1>TCM-Kräuterlexikon</h1></div>
