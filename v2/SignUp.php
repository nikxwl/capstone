<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
</head>

<link rel="stylesheet" href="CSS/Sign Up.css">
	
<body style="background-color: #0F2C59">
	
   <div class="SignUp">
	<h1> Sign Up</h1>
	<img class="SocialBG" src="Pictures/SocialBG.jpg">
	</div>
<form id = "signup"> 	
	<div class="Fullname"> <input type="text" placeholder="Enter Fullname" name="funame" required></div> 
	<div class="Username"> <input type="text" placeholder="Enter Username" name="uname" required> </div> 
    <div class="Password"> <input type="password" placeholder="Enter Password" name="psw" required> </div> 
    <div class="CPassword"> <input type="password" placeholder="Enter Confirm Password" name="cpsw" required> </div> 
</form>	
		  <a href="Main Page.php">
		  <button class="CreateButton" onclick="togglePopup()"><b> Create Account </b></button>
		    </a>
</body>
</html>
