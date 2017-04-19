<!DOCTYPE html>
<html>
<head>
	<title>Register JHAssistant</title>
	<link rel="stylesheet" type="text/css" href="registerStyle.css">
	<script type="text/javascript">
            function validate() {
				var user = document.getElementById('newname');
				var npwd = document.getElementById('newpass');
				var cpwd = document.getElementById('conpass');

				
				if(npwd.value.length<4){
					alert("password is too short");
					return false;
				}
				
				if(user.value == '' || npwd.value == '') {
					alert("username and password shouldn't be blank");
					return false;
				}else if(npwd.value!=cpwd.value){
					alert("password does not match");
					return false;
				}else{
					alert("register submitted");
					return true;
				}
        }
    
      </script>
</head>
<body>
	<div class="outer-wrap">
		<h1>Welcome to JAssistant</h1>
		<div id="explain">
			<ul>
				<li>First of all, thank you for visiting our page.</li>
				<li>JHAssistant is a nonprofit tool</li>
				<li>So far, JAssistant only provides some simple apps and 3D game, but JAssistant is trying to become cool as possible.</li>
				<li>In order to register, you only need to fill out the username and password.</li>
				<li>Choose a password you like. Because no one is going to hack your account, no need to use long and complicated one as you can remember your password.  
				    But don't make it too short, otherwise it won't accept your registeration.</li>
				<li>The benefit of registering as a member is you can use the apps. It's totally up to you.</li>
				<li>We don't mean to collect people information, so the name and email is all optional. We use email only when you 
					forget your password or you really like to subscribe our page.</li>
				<li>If you have any question and want to support JAssistant, feel free to email: hiliu5845@gmail.com.</li>
			</ul>
		</div>
	</div>
	
	
	<div id="register">
		<h1>Register Form</h1>
		<form onsubmit="return validate()" action="register.php" method="post">
		
			<p>
				<label for="a">*Username:</label>
				<input id="newname" type="text" value="username" name="newname" style="font-size:18px;" />
			</p>
			<p>
				<label for="a">*Password:</label>
				<input id="newpass" type="password" value="password" name="newpass" style="font-size:18px;"/>
			</p>
			
			<p>
				<label for="a">*Confirm Password:</label>
				<input id="conpass" type="password" value="password" name="conpass" style="font-size:18px;"/>
			</p>
			<br />
			*** additional information ***
			<br />
			<br />
			<p>
				<label for="a">First Name:</label>
				<input id="firstname" type="text" value="Joe" name="firstname" style="font-size:18px;" />
			</p>
			
			<p>
				<label for="a">Last Name:</label>
				<input id="lastname" type="text" value="Liu" name="lastname" style="font-size:18px;" />
			</p>
			
			
			<p>
				<label for="a">Email:</label>
				<input id="email" type="text" value="xxx@yyy.com" name="email" style="font-size:18px;" />
			</p>
			
			<p>
				<label for="a">Comment:</label>
				<textarea id="comment" rows="4" cols="30" name="comment" style="font-size:18px;"/>Anything you want us to know?</textarea>
			</p>
			
			<p>
				<input type="submit"
					id="btn" 
					value="register" 
					style="font-size:14px;
					font-family: Arial Black,Helvetica,sans-serif;" >
				<input type="reset"
					id="btn" 
					value="reset" 
					style="font-size:14px;
					font-family: Arial Black,Helvetica,sans-serif;" >
			</p>
		</form>
	</div>
	
</body>

</html>