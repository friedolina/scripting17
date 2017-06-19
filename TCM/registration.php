<?php

include 'header.php';

?>

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
    <div id="headline"><h1>Registrierung</h1></div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left" action="registration_auswerten.php" method="post">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="Username...">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Passwort</label>
						<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="Passwort...">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Passwort bestätigen</label>
						<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="Passwort bestätigen...">
					</div>

				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>Hast du schon einen Account? </br><a href="/TCM/index.php">Hier geht's zum Login</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>

<?php

include 'footer.php';

?>