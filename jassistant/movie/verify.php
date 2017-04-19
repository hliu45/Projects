<?php
	if ( $_SESSION['logged_in'] != 1 ) {
		$_SESSION['message'] = "You must log in before using movie app! Please go back to register";
	header("location: ../error.php");  
}
?>