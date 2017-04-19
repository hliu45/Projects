<?php
	if ( $_SESSION['logged_in'] != 1 ) {
		$_SESSION['message'] = "You must log in before using map app! Please go back to register page, thank you";
	header("location: ../error.php");  
}
?>