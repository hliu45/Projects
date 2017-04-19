<?php
	session_start();
	require 'verify.php';
	$username = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
<head>
	<link href="main.css" type="text/css" rel="stylesheet">
	<title>Main Page</title>
</head>
<body>
	<div class="personal-session">
		<span id="account">hello <?php echo $username; ?> |</span>
		<span id="account"><a href="login.php">Home</a> |</span>
		<span id="account"><a href="logout.php">Logout</a></span>
	</div>
	<div class="main_icon">
		<div class="hvr-grow-shadow"><a href="movie/movie.php"><img id="icon" src="movie.png" alt="movie" ></a></div>
		<div class="hvr-grow-shadow"><a href="weather/weather.php"><img id="icon" src="weather.png" alt="weather" ></a></div>
		<div class="hvr-grow-shadow"><a href="news/news.php"><img id="icon" src="news.png" alt="news" ></a></div>
		<div class="hvr-grow-shadow"><a href="map/map.php"><img id="icon" src="map.png" alt="map" ></a></div>
		<div class="hvr-grow-shadow"><a href="roll_a_ball/roll_a_ball.html"><img id="icon" src="rolling_ball.jpg" alt="game" ></a></div>
		<div class="hvr-grow-shadow"><a href="space_shooter/space_shooter.html"><img id="icon" src="game_1.png" alt="game" ></a></div>
		<div class="hvr-grow-shadow"><img id="icon" src="game.png" alt="game" ></div>
	</div>
</body>
</html>