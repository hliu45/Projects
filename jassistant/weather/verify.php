<?php
	if ( $_SESSION['logged_in'] != 1 ) {
		$_SESSION['message'] = "You must log in before viewing your profile page!";
	header("location: ../error.php");  
}
?>