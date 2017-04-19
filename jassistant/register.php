<?php
	require 'db.php';
	session_start();
	
	if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['newname'];
	$password = $_POST['newpass'];
	$conpassword = $_POST['conpass'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	
	$_SESSION['user_name'] = $username;
	
	if($password==$conpassword){
		
		$query = "SELECT COUNT(*) FROM account WHERE username='$username'";
		
		$result = mysqli_query($mysql,$query);
		
		if(!$result){
			echo "failed to query: ".mysqli_error($link);
			}
		
		$row = mysqli_fetch_array($result);

		
		if($row['COUNT(*)']>0){
			$_SESSION['message'] = 'username has been taken! choose another one. Thanks';
			header("location: error.php");
		}else{
			$query = "INSERT INTO account (firstname, lastname, username, password,email) VALUES('$firstname','$lastname','$username','$password','$email')";
			mysqli_query($mysql,$query);
			echo "Register Successfully!  ";
			$_SESSION['logged_in'] = true;
			$_SESSION['message'] = "Welcome ".$username.".! It is good to have you here.";
			header("location: profile.php");
		}
	}else{
		echo "password does not match";
	}
?>

