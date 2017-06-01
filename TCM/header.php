<!DOCTYPE html>

        <?php
            include 'connect.php';
        ?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../script/buttonUp.js"></script>
        <script src="../script/addInput.js" language="Javascript" type="text/javascript"></script>
        <script src="../script/eintragBearbeiten.js" language="Javascript" type="text/javascript"></script>
        <script src="../script/bootstrap.js" language="Javascript" type="text/javascript"></script>
        <script src="../script/npm.js" language="Javascript" type="text/javascript"></script>
        <title>TCM-Kräuterlexikon</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/TCM/style/bootstrap.css">   
        <link rel="stylesheet" href="/TCM/style/style.css">   
    </head>    
    <body>
        
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <!--form class="navbar-form navbar-left"-->
                <!--div class="form-group">
                  <input type="text" class="form-control" placeholder="Search"-->
                  <form class="navbar-form navbar-left" method="POST" action="/TCM/search_output.php">
                            <div class="form-group">
                                <!--label for="input_search"></label-->
                                <input type="text" class="form-control" required="required" name="search_form" maxlength="150" placeholder="Suche...">
                                <!--span class="help-block"></span-->
                                <button type="submit" class="btn btn-default" name="submit" >Search</button>

                            </div>
                            <!--div class="form-actions">
                                
                            </div-->
                    </form>
                <!--/div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form-->
              <!--ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul-->
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        
        <div id="content_container">
            
            <div id="header"><h1>TCM-Kräuterlexikon</h1></div>
