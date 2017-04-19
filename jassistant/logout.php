<?php
	session_start();
	session_unset();
	session_destroy(); 
?>

<html>
	<head>
	</head>
	<body>
		<h1>you successfully log out. We like to have you back!</h1>
		
		<h2><a href="login.php">Go back to Home page</a></h2>
	</body>
</html>