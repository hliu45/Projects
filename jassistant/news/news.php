<?php
	session_start();
	require 'verify.php';
	$username = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>News Room</title>
    <link rel="stylesheet" type="text/css" href="news.css" />
	<script type="text/javascript" src="news.js"></script>
  </head>
  <body>
	<div class="personal-session">
		<span id="account">hello <?php echo $username; ?> |</span>
		<span id="account"><a href="../login.php">Home</a> |</span>
		<span id="account"><a href="../logout.php">Logout</a></span>
	</div>
	<h1>News Room</h1>
	Source: CNBC, Ars Technica, BBC, Reuters, Verge, ESPN
	<div class="main-headline">
		<table class="tableNews">
			<tr>
				<td id="column">
					<img id="tablepic1" src="not_found.png" style="width:100%">
				</td>
				
				<td id="column">
					<img id="tablepic2" src="not_found.png" style="width:100%">
				</td>
				
				<td id="column">
					<img id="tablepic3" src="not_found.png" style="width:100%">
				</td>
			</tr>
		
			<tr>
				<td id="column" valign="top">
					<div id="tabledes"><span id="tit1">Description</span></div>
					<div id="tabledes"><span id="td1">Description</span></div>
				</td>
				
				<td id="column" valign="top">
					<div id="tabledes"><span id="tit2">Description</span></div>
					<div id="tabledes"><span id="td2">Description</span></div>
				</td>
				
				<td id="column" valign="top">
					<div id="tabledes"><span id="tit3">Description</span></div>
					<div id="tabledes"><span id="td3">Description</span></div>
				</td>
			<tr>
			
			<tr>
				<td id="column">
					<img id="tablepic4" src="not_found.png" style="width:100%">
				</td>
				
				<td id="column">
					<img id="tablepic5" src="not_found.png" style="width:100%">
				</td>
				
				<td id="column">
					<img id="tablepic6" src="not_found.png" style="width:100%">
				</td>
			</tr>
			
			
			<tr>
				<td id="column" valign="top">
					<div id="tabledes"><span id="tit4">Description</span></div>
					<div id="tabledes"><span id="td4">Description</span></div>
				</td>
				
				<td id="column" valign="top">
					<div id="tabledes"><span id="tit5">Description</span></div>
					<div id="tabledes"><span id="td5">Description</span></div>
				</td>
				
				<td id="column" valign="top">
					<div id="tabledes"><span id="tit6">Description</span></div>
					<div id="tabledes"><span id="td6">Description</span></div>
				</td>
			<tr>
		</table>
	</div>
	
	
	<table class="newsline" style="width:95%">
		<tr>
			<td class="news">
				<img id="pic1" src="not_found.png" style="width:30%">
				<div id="description1"></div>
				<div id="newsBottom">
					<span id="author1"></span>
					<span id="time1"></span>
				</div>
			</td>
			
			<td class="news">
				<img src="p7.png" style="width:100%;height:225px;">
			</td>
			
			<td class="news">
				<img id="pic7" src="not_found.png" style="width:30%">
				<div id="description7"></div>
				<div id="newsBottom">
					<span id="author7"></span>
					<span id="time7"></span>
				</div>
			</td>
			
			<td class="news">
				<img src="p1.jpg" style="width:100%;height:225px;">
			</td>
			
		</tr>
		
		
		<tr>
			<td class="news">
				<img src="p8.png" style="width:100%;height:225px;">
			</td>
		
			<td class="news">
				<img src="p2.jpg" style="width:100%;height:225px;">
			</td>
		
			<td class="news">
				<img id="pic8" src="not_found.png" style="width:30%">
				<div id="description8"></div>
				<div id="newsBottom">
					<span id="author8"></span>
					<span id="time8"></span>
				</div>
			</td>
			
			<td class="news">
				<img id="pic11" src="not_found.png" style="width:30%">
				<div id="description11"></div>
				<div id="newsBottom">
					<span id="author11"></span>
					<span id="time11"></span>
				</div>
			</td>
			
		</tr>
		
		<tr>
			<td class="news">
				<img id="pic2" src="not_found.png" style="width:30%">
				<div id="description2"></div>
				<div id="newsBottom">
					<span id="author2"></span>
					<span id="time2"></span>
				</div>
			</td>
			
			<td class="news">
				<img id="pic4" src="not_found.png" style="width:30%">
				<div id="description4"></div>
				<div id="newsBottom">
					<span id="author4"></span>
					<span id="time4"></span>
				</div>
			</td>
			
			<td class="news">
				<img src="p9.png" style="width:100%;height:225px;">
			</td>
			
			<td class="news">
				<img src="p3.jpg" style="width:100%;height:225px;">
			</td>
			
		</tr>
		
		<tr>
			<td class="news">
				<img src="p4.jpg" style="width:100%;height:225px;">
			</td>
		
			<td class="news">
				<img id="pic5" src="not_found.png" style="width:30%">
				<div id="description5"></div>
				<div id="newsBottom">
					<span id="author5"></span>
					<span id="time5"></span>
				</div>
			</td>
			
			<td class="news">
				<img id="pic9" src="not_found.png" style="width:30%">
				<div id="description9"></div>
				<div id="newsBottom">
					<span id="author9"></span>
					<span id="time9"></span>
				</div>
			</td>
			
			<td class="news">
				<img src="p10.png" style="width:100%;height:225px;">
			</td>
			
		</tr>
		
		<tr>
		
			<td class="news">
				<img id="pic3" src="not_found.png" style="width:30%">
				<div id="description3"></div>
				<div id="newsBottom">
					<span id="author3"></span>
					<span id="time3"></span>
				</div>
			</td>
			
			<td class="news">
				<img src="p11.png" style="width:100%;height:225px;">
			</td>
			
			<td class="news">
				<img id="pic10" src="not_found.png" style="width:30%">
				<div id="description10"></div>
				<div id="newsBottom">
					<span id="author10"></span>
					<span id="time10"></span>
				</div>
			</td>
			
			<td class="news">
				<img src="p5.jpg" style="width:100%;height:225px;">
			</td>
			
		</tr>
		
		<tr>
			<td class="news">
				<img src="p12.png" style="width:100%;height:225px;">
			</td>
		
			<td class="news">
				<img id="pic6" src="not_found.png" style="width:30%">
				<div id="description6"></div>
				<div id="newsBottom">
					<span id="author6"></span>
					<span id="time6"></span>
				</div>
			</td>
			
			<td class="news">
				<img src="p6.jpg" style="width:100%;height:225px;">
			</td>
			
			<td class="news">
				<img id="pic12" src="not_found.png" style="width:30%">
				<div id="description12"></div>
				<div id="newsBottom">
					<span id="author12"></span>
					<span id="time12"></span>
				</div>
			</td>
			
		</tr>
		
	</table>

	
  </body>
</html>