     </div>
    
      <div id="nutzer">
            <?php 
            
                if ($_SESSION['benutzername'] !== NULL) {
                    echo "<p>Eingeloggt als " . $_SESSION['benutzername'] . " | <a href='/TCM/logout.php'>Logout</a></p>";
                } else {
                    echo "<p><a href='/TCM/index.php'>Einloggen</a> | <a href='/TCM/registration.php'>Registrieren</a></p>";
                }
            ?>
            
      </div>
    </body>
</html>