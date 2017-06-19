<?php

include 'header.php';
include 'filterinput.php';

$benutzername = test_input($_POST["lg_username"]);
$passwort = test_input($_POST["lg_password"]);

//print_r($_POST);

// SQL
$sql_login = "SELECT 
            * 
        FROM 
            benutzer 
        WHERE 
            benutzername='$benutzername';";

// SQL ausführen
$result_login = mysqli_query($db, $sql_login) or die(mysqli_error($db));
$login = mysqli_fetch_array($result_login);


if (password_verify('$passwort', $login['passwort'])) {
    // Nutzer einloggen
    
    $_SESSION["benutzername"] = $benutzername;
    
    echo "
            <h3>Hallo $benutzername! Du bist eingeloggt!</h3>
        ";
    
}
else {
    echo "<p>Du bist offenbar noch nicht bei uns registriert!</p></br><p>Du kannst dir <a href='/TCM/registration.php'>hier</a> einen Account anlegen.</p>";

}
?>

        </div>
    </body>
</html>