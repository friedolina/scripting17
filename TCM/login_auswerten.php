<?php
    session_start();
    include 'connect.php';
    include 'filterinput.php';
    ob_start();



$benutzername = test_input($_POST["lg_username"]);
$passwort = test_input($_POST["lg_password"]);

print_r($_POST);

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
$hash = $login['passwort'];
echo strlen($hash) . "</br>";
echo $login['benutzername'] . "</br>";
echo $hash . "</br>";
echo $login['passwort'] . "</br>";
//echo $passwort . "</br>";

if (password_verify($passwort, $hash)) {
    // Nutzer einloggen
    
    $_SESSION["benutzername"] = $benutzername;
    //echo "
    //        <h3>Hallo $benutzername! Du bist eingeloggt!</h3>
    //    ";
} 
/*
else {
    echo "<form method='post'>";
    echo "<input type='hidden' name='login_fail' value='<p>Du bist offenbar noch nicht bei uns registriert!</p></br><p>Du kannst dir <a href='/TCM/registration.php'>hier</a> einen Account anlegen.</p>'/>";
    echo "</form>";
}
*/

while (ob_get_status()) 
        {            
            ob_end_clean();
        }

        header("Location: /TCM/index.php");



?>
