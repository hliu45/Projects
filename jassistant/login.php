<!DOCTYPE html>
<!--ftp.josefliu.com, hliu45@josefliu.com, 21-->
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div id="login">
		<form onsubmit="return validate()" action="process.php" autocomplete="on" method="POST">
			<p>
				<img src="user_icon.png" alt="w" style="width:35px;height:35px;">
				<input type="text" id="userpwd" value="username" style="font-size:22px;" name="user" />
			</p>
			<p>
				<img src="key_icon.png" alt="w" style="width:35px;height:35px;">
				<input type="password" id="userpwd" value="password" style="font-size:22px;" name="pass" />
			</p>
			<p>
				<input type="submit"
					id="btn" 
					value="login" 
					style="font-size:20px;
					font-family: Arial Black,Helvetica,sans-serif;" />
			</p>
		</form>
		<div id="register_warning">
			<p>Don't have account yet. Go to <a href="registerPage.php">Register</a></P>
		</div>
	</div>
	<br />
	
	
	
</body>

</html>