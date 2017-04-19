<?php
	session_start();
	require 'verify.php';
	$username = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Weather report</title>
    <link rel="stylesheet" type="text/css" href="weather.css" />
	<script type="text/javascript" src="weather.js"></script>
  </head>
  <body>
	
	<div class="personal-session">
			<span id="account">hello <?php echo $username; ?> |</span>
			<a href="../login.php"><span id="account">Home |<span></a> 
			<a href="../logout.php"><span id="account">Logout</span></a>
	</div>
	<h1>Weather Report</h1>
	
	<div class="outter-wrap">
	<div class="inner-wrap">
		<div id="black"></div>
		<div id="location">current</div>
        <div id="time">time</div>
		<div id="purple"></div>
        <div id="blue">
			<div id="gray"></div>
			<div id="yellow"><span id="temperature">97</span><span id="deg">&deg </span></div>
		</div>
		<div id="brown"><img id="icon" height="90%" src="imgs/codes/200.png" /></div>
		<div id="orange"></div>
		<div id="pink">
			<table>
				<tr>
					<td id="tit" width="100px">Humidity:</td>
					<td width="20px"></td>
					<td id="state"><span id="humidity">82</span><span id="unit">%</span></td>
					<td width="70px"></td>
					<td><span id="first">err</span></td>
					<td><img id="ftem" src="imgs/codes/800.png"></td>
					<td width="30px"></td>
					<td><span id="fouth">err</span></td>
					<td><img id="fotem" src="imgs/codes/800.png"></td>
				</tr>
				
				<tr>
					<td id="tit" width="100px"> Wind:</td>
					<td width="20px"></td>
					<td id="state"><span id="wind">7.7</span> <span id="unit">mphs</span> <span id="direction">N</span></td>
					<td width="70px"></td>
					<td><span id="second">cxx</span></td>
					<td><img id="stem" src="imgs/codes/800.png"></td>
					<td width="30px"></td>
					<td><span id="fivth">err</span></td>
					<td><img id="fitem" src="imgs/codes/800.png"></td>
				</tr>
				
				<tr>
					<td id="tit" width="100px">UV Idx:</td>
					<td width="20px"></td>
					<td id="state"><span id="uv">7.7</span></td>
					<td width="70px"></td>
					<td><span id="third">bnm</span></td>
					<td><img id="ttem" src="imgs/codes/800.png"></td>
					<td width="30px"></td>
				</tr>
			</table>
	
			
		</div>
	</div>
	
	</div>
  </body>
</html>