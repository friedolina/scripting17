<!DOCTYPE html>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
        <title>TCM-Transformation</title>
        <meta charset="UTF-8">
            <style>
                body {
                    font-family: 'Playfair Display', serif;
                    font-size: 24pt;
                    width:50%;
                    margin: auto;
                }
                body p, body input {
                    display: inline-block;
                    margin: 10px;
                }
            </style>
    </head>    
    <body>
<!-- mit dieser Methode kann man auf einzelne Elemente des XML-Dokuments zugreifen. Das erwartete Output ist "Adstringierende Kräuter".-->

    <?php
    include 'TCM.php';
    
    $krauts = new SimpleXMLElement($xmlstr);
    
    echo $krauts->kategorien->kategorie[0]->name;
    ?>

    </body>
</html>