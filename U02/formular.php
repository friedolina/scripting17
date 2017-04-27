<!doctype html>
<html>
    <head>
       <meta charset="UTF-8">
       <title>Mein erstes Formular</title>
    </head>
    
    <body>
        <!-- Neues Feld einfügen: Anzahl der Bestellungen -->
            <h1>Mein Formular</h1>
            <form action="ausgabe.php" method="get">
                Dein Mittagessen:<br>
                <input type="text" name="mittagessen"/><br>
                Beilage<br>
                <input type="text" name="beilage"/><br>
                Farbe<br>
                <select name="farbe">
                  <option value="red">Rot</option>
                  <option value="green">Grün</option>
                  <option value="blue">Blau</option>
                  <option value="lightgrey">Hellgrau</option>
                </select> <br>
                Anzahl:<br>
                <input type="text" name="anzahl"/><br>
               Mitteilung:<br>
                <input type="text" name="nachricht"/><br>
                <input type="submit" value="Submit"/>
            </form>
        
    </body>
</html>