<!DOCTYPE html>
<!-- die Erklärungen zu dem, was hier passiert, findest du hier: http://be2.php.net/manual/de/simplexml.examples-basic.php -->
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
        <title>TCM-Transformation</title>
        <meta charset="UTF-8">
            <style>
                body {
                    font-family: 'Playfair Display', serif;
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
    
    $TCM = new SimpleXMLElement($xmlstr);

    echo "<h2>Einzelbeispiel</h2>";
    
    echo $TCM->kategorien->kategorie[0]->name;
    ?>
    <br>
    
<!-- auf diese Weise lassen sich mehrere Kindelemente mit gleichem Namen durchiterieren -->    
    <?php
    echo "<h2>Kategorienbeispiel</h2>";
    foreach ($TCM->kategorien->kategorie as $kategorie) {
        echo "<li>" . $kategorie->name . "</li>";
    }
    
    
    echo "<h2>Kräuterbeispiel</h2>";
    foreach ($TCM->kraeuter->kraut as $kraut) {
        echo "<li>" . $kraut->name . ": ";
        foreach ($kraut->merkmal as $merkmal) {
            echo $merkmal . ", ";
        }
        echo "</li>";
    }
    ?>

    </body>
</html>

