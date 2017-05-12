<!DOCTYPE html>

        <?php
            include 'connect.php';
        ?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
        <script src="../script/buttonUp.js"></script>
        <script src="../script/addInput.js" language="Javascript" type="text/javascript"></script>

        <!--<script src="https://code.jquery.com/jquery-latest.js"></script>-->
        <title>TCM-Kräuterlexikon</title>
        <meta charset="utf-8">
            <style>
                body {
                    font-family: 'Playfair Display', serif;
                    /**font-size: 24pt;**/
                    width:50%;
                    margin: auto;
                }
                body p, input {
                    display: inline-block;
                    margin: 10px;
                }
                #myBtn {
                    display: none; /* Hidden by default */
                    position: fixed; /* Fixed/sticky position */
                    bottom: 20px; /* Place the button at the bottom of the page */
                    right: 30px; /* Place the button 30px from the right */
                    z-index: 99; /* Make sure it does not overlap */
                    cursor: pointer; /* Add a mouse pointer on hover */
                }
               
            </style>
    </head>    
    <body>
        <div id="header"><h1>TCM-Kräuterlexikon</h1></div>
        

        