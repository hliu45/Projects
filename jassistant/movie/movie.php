<?php
	session_start();
	require 'verify.php';
	$username = $_SESSION['user_name'];	
?>

<html>
  <head>
    <title>Movie Session</title>
    <link rel="stylesheet" type="text/css" href="movie.css" />
	<script type="text/javascript" src="movie.js"></script>
  </head>
  <body>
		<div class="personal-session">
			<span id="account">hello <?php echo $username; ?> |</span>
			<a href="../login.php"><span id="account">Home |<span></a> 
			<a href="../logout.php"><span id="account">Logout</span></a>
		</div>
		<h1>Movie Session</h1>
		<div class="search_function">
			<span id="searchWord">Enter the best movie you like</span>
			<p>
				<button id="searchButton" onclick="searchBegin()">Search</button>
			</p>
			<p>
				<input type="text" id="movieSearch" value="search" style="font-size:22px;"/>
			</p>
		</div>	
			
			<div class="upper-wrap">
				<div id="picSession">
					<img id="pic1" src="white.png" style="width:25%;height:550px;">
					<img id="pic2" src="white.png" style="width:24.5%;height:550px;">
					<img id="pic3" src="white.png" style="width:24.5%;height:550px;">
					<img id="pic4" src="white.png" style="width:25%;height:550px;">
				</div>
				<div id="forwardBackward" style="margin:0 auto;">
					<button id="backward" onclick="minusDivs()">backward</button>
					<button id="forward" onclick="plusDivs()">forward</button>
				</div>
			</div>
				<div id="space"></div>
				
				
				<div id="intro">
				<table>
				<tr>
					<th></th>
					<th></th> 
					<th>OverView</th>
					<th></th>
					<th>Release Date</th> 
					<th>Rate</th>
					<th>Popularity</th> 
				</tr>
				<tr>
					<td><img id="icon1" src="not_found.png" style="width:100px;height:150px;"></td>
					<td width="16px"></td>
					<td id="overView1" width="60%">Best movie</td>
					<td width="6x"></td>
					<td id="releaseDate1" width="16%">2017-4-13</td>
					<td id="rate1" width="18%">
						<img id="rate1_1" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(0,0)' >
						<img id="rate1_2" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(0,1)' >
						<img id="rate1_3" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(0,2)' >
						<img id="rate1_4" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(0,3)' >
						<img id="rate1_5" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(0,4)' >
					</td>
					<td id="popularity1">8</td>
				</tr>
				
				<tr>
					<td><img id="icon2" src="not_found.png" style="width:100px;height:150px;"></td>
					<td width="16px"></td>
					<td id="overView2" width="60%">Best movie</td>
					<td width="6px"></td>
					<td id="releaseDate2" width="16%">2017-4-13</td>
					<td id="rate1" width="18%">
						<img id="rate2_1" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(1,0)' >
						<img id="rate2_2" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(1,1)' >
						<img id="rate2_3" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(1,2)' >
						<img id="rate2_4" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(1,3)' >
						<img id="rate2_5" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(1,4)' >
					</td>
					<td id="popularity2">8</td>
				</tr>
				
				<tr>
					<td><img id="icon3" src="not_found.png" style="width:100px;height:150px;"></td>
					<td width="16px"></td>
					<td id="overView3" width="60%">Best movie</td>
					<td width="6px"></td>
					<td id="releaseDate3" width="16%">2017-4-13</td>
					<td id="rate1" width="18%">
						<img id="rate3_1" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(2,0)' >
						<img id="rate3_2" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(2,1)' >
						<img id="rate3_3" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(2,2)' >
						<img id="rate3_4" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(2,3)' >
						<img id="rate3_5" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(2,4)' >
					</td>
					<td id="popularity3">8</td>
				</tr>
				
				<tr>
					<td><img id="icon4" src="not_found.png" style="width:100px;height:150px;"></td>
					<td width="16px"></td>
					<td id="overView4" width="60%">Best movie</td>
					<td width="6px"></td>
					<td id="releaseDate4" width="16%">2017-4-13</td>
					<td id="rate1" width="18%">
						<img id="rate4_1" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(3,0)' >
						<img id="rate4_2" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(3,1)' >
						<img id="rate4_3" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(3,2)' >
						<img id="rate4_4" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(3,3)' >
						<img id="rate4_5" src="no_oscar.png" style="width:30px;height:60px;" onmouseover='hover(3,4)' >
					</td>
					<td id="popularity4">8</td>
				</tr>
			</table>
		</div>	
  </body>
</html>