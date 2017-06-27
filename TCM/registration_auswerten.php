<?php
include("header.php");
include("filterinput.php");

// Neuen Nutzer speichern

$benutzername = test_input($_POST["reg_username"]);
$passwort = test_input($_POST["reg_password"]);
$passwort_bestätigung = test_input($_POST["reg_password_confirm"]);


if ($passwort_bestätigung == $passwort) {
    $sql_benutzerdopplung = "SELECT * FROM benutzer WHERE benutzername = '$benutzername';";
    $result_benutzerdopplung = mysqli_query($db, $sql_benutzerdopplung) or die(mysqli_error($db));
    $benutzerdopplung = mysqli_fetch_array($result_benutzerdopplung);

    if ($benutzerdopplung == true) {
        echo "<p>Der Benutzername existiert bereits. Versuch es noch einmal!</p></br>";
        echo "<p><a href='registration.php'>Zurück zur Registrierung...</a></p>";
    } else {

    // SQL
    $sql_registration = "INSERT into benutzer
                (
                    benutzername,
                    passwort
                )
            VALUES
                ( 
                    '$benutzername',
                    '" . password_hash($passwort, PASSWORD_DEFAULT) . "'
                )";
    
    $result_registration = mysqli_query($db, $sql_registration) or die(mysqli_error($db));
    
    
    echo "<p>Hallo $benutzername!</p></br>";
    echo "<p>Du hast Dich erfolgreich registriert!</p></br>";
    
    echo "<p><a href='index.php'>Hier geht's zum Login</a></p>";
    }
} else {
    echo "<p>Die Passwort-Eingaben stimmen nicht überein. Versuch's noch einmal!</p></br>";
    echo "<p><a href='registration.php'>Zurück zur Registrierung...</a></p>";
}
    
?>
        </div>
    </body>
</html>