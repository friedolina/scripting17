<?php
    $dein_mittagessen = $_GET["mittagessen"];
    $deine_beilage = $_GET["beilage"];
    $deine_farbe = $_GET["farbe"];
    $deine_nachricht = $_GET["nachricht"];
    $deine_anzahl = $_GET["anzahl"];
    $dein_bild = 0;
    
    //wenn die Farbe black ist, soll die Textfarbe weiß sein
    
    //if($deine_farbe == "black"){
    //    $deine_schrift = "white";
    //}else{
    //    $deine_schrift = "black";
    //}
    
    //if($deine_farbe == "black" or $deine_farbe == "green"){          //mit Operatoren
    //    $deine_schrift = "white";
    //}else{
    //    $deine_schrift = "black";
    //}
    
    //Juhu, ganz allein! :D
    
    //switch($deine_farbe){               //Switch Normal :D
    //    case "black":
    //        $deine_schrift = "white";
    //        break;
    //    case "green":
    //        $deine_schrift = "white";
    //        break;
    //}
    
     switch($deine_farbe){               //Switch Falling Through :DD
        case "black":
        case "green":
            $deine_schriftfarbe = "white";
            break;
        case "blue":
            $deine_schriftfarbe = "yellow";
            break;
    }
    
    //if($deine_anzahl < 10){
    //    $deine_antwort = "Bestellung wird bearbeitet, bitte warten";
    //}else{
    //    $deine_antwort = "Es sind nur neun Mahlzeiten vorrätig";
    //}     
    
    if(is_numeric($deine_anzahl)){                                      //Überprüfen, ob eine Zahl eingegeben wurde
        if($deine_anzahl < 10){
            $deine_antwort = "Bestellung wird bearbeitet, bitte warten";
             
        }else{
            $deine_antwort = "Es sind nur neun Mahlzeiten vorrätig";
        }
    }else{    
        $deine_antwort = "Gib bitte eine Zahl ein";
    }
    
    while($dein_bild < $deine_anzahl){          //Bilder ausgeben
        echo "<img src='brot.png'>";
        $dein_bild ++;  //$dein_bild = $dein_bild + 1;
    }
    
    //Wenn die Anzahl größer als 10 ist
    //Anzeige "Bestellung kann nicht bearbeitet werden, nur 9 Essen vorrätig"
?>
<!doctype html>
<html>
    <head>
       <meta charset="UTF-8">
       <title>Mein erstes Formular</title>
       <style type="text/css">
           body{
               background-color: <?php echo $deine_farbe ?>;
               color: <?php echo $deine_schriftfarbe ?>;             /*Ausgeben der neuen Variable*/
           }
       </style>
    </head>
    
    <body>
        
            <h1>Du  willst <?php echo $dein_mittagessen ?> mit <?php echo $deine_beilage ?> essen.</h1>
            <h1>Antwort: <?php echo $deine_antwort ?> </h1>
            <script>
                alert ("<?php echo $deine_nachricht ?>");
            </script>
            <FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
    </body>
</html>