<?php
session_start();

require 'verify.php';
if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
		  
$username = $_SESSION['user_name'];
?>


<!DOCTYPE html>
<html>
	<head>
		<link href="profile.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		<div class="personal-session">
		<span id="account">hello <?php echo $username; ?> |</span>
		<span id="account"><a href="login.php">Home</a> |</span>
		<span id="account"><a href="logout.php">Logout</a></span>
	</div>
		<div><a href="main.php"><div></div></a>
		<h1><a href="main.php">Go to Main Page</a></h1>
	</body>
</html>
