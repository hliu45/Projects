<?php
	require 'db.php';
	session_start();
	
	// Get values pass from form in login.php file
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$_SESSION['user_name'] = $username;
	
	if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$query = "SELECT * FROM account WHERE username='$username' AND password='$password'";
		$result = mysqli_query($mysql,$query);
		
		if(!$result){
		echo "failed to query: ".mysqli_error($query);
		}
	
		$row = mysqli_fetch_array($result);
		
		if($row['userName']==$username && $row['passWord']==$password){
			$_SESSION['message'] = "Login successfully!!! Welcome ".$username;
			$_SESSION['logged_in'] = true;
			header("location: profile.php");
		}else{
			$_SESSION['message'] = "Failed to login! If you haven't register, go to register and make sure your username and password are all correct"
					." ".$username." = ".$row['userName']." ".$password." = ".$row['passWord'];
			header("location: error.php");
		}
		
	}
?>