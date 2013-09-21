<?php
/****************************************************************************
 * DRBGuestbook
 * http://www.dbscripts.net/guestbook/
 * 
 * Copyright (c) 2007-2010 Don B
 ****************************************************************************/
 
$base_url = "./";
require_once (dirname(__FILE__) . '/includes/utils.php');
require_once (dirname(__FILE__) . '/config.php');
require_once (dirname(__FILE__) . '/strings.php');

$login_error = FALSE;

if(isset($_POST['username']) && isset($_POST['password'])) {
	
	// Check credentials
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username === $ADMIN_USERNAME && $password === $ADMIN_PASSWORD) {
		
		// Start session
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['admin'] = "TRUE";
		session_write_close();

		// Redirect to admin page
		global $ADMIN_FOLDER;
		relative_location($ADMIN_FOLDER . "/");
		exit();

	} else {
		
		$login_error = "Vnesili ste uporabniško ime in geslo ki je neveljavno.";
		
	}
	
}

// Render login page
include_from_template('header.php');

?>

<?php
if($login_error !== FALSE) {
	echo "<p class=\"errorMessage\">" . htmlspecialchars_default($login_error) . "</p>";
}
?>

<form method="post" action="login.php">
<fieldset>
<legend>Prijava</legend>

<p>
<label for="username">Uporabniško ime:</label>
<input type="text" name="username" id="username" class="inputText" />
<br />
<label for="password">Geslo:</label>
<input type="password" name="password" id="password" class="inputText" />
</p>
<input type="submit" value="Prijava" class="submit" />
</fieldset>  
</form>

<?php
include_from_template('footer.php');
?>
