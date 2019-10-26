<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>Welcome<?php
			if(isset($_SESSION['username'])) {
				echo ", ".$_SESSION['username'];
			}
			else {
				echo "!";
			}
		?>
	</h1>
	<h2>Login</h2>

	<form action="startsession.php" method="POST">
		<input type="text" name="username">
		<input type="password" name="password">
		<button type="submit">Login</button>
	</form>

	<h2>Logout:</h2>

	<form action="endsession.php" method="POST">
		<button type="submit">Logout</button>
	</form>

</body>

</html>