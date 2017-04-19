<?php
	if ( $_SESSION['logged_in'] != 1 ) {
		$_SESSION['message'] = "You must log in before using news app! Please go back to register. Thank you!";
	header("location: ../error.php");  
}
?>