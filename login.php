<!DOCTYPE html>
<html lang=en>

<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->
<head>
<link rel="stylesheet" type="text/css" href="dropdown.css">
<title>Login</title>
<script type="text/javascript">
	 <!-- 
	 var retVal = prompt("Enter your Identfication number : ", "");
	  	   //--> </script>

<meta name="author" content="Nelson Anjere" />
<script type="text/javascript" src="jquery-1.12.3.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
	$(document).ready(function(){
    $("button").click(function(){
    $("#k").hide(1000);
});
});
	</script>
	<link rel="stylesheet" type="text/css" href="final.css">
	
</head>
<body>

<div id="container">
	<div id="header"><center>
		<h1>NELIX HOUSEHELP</h1>
		</center>
	 <!-- end header -->
	<div id="Menu1">
			<a href="home.php"onmouseover="style.color='olive'"
               onmouseout="style.color='black'"><b>Home</b></a>

			<a href="about.php"onmouseover="style.color='olive'"
               onmouseout="style.color='black'"><b>About Us</b></a>

			    <a href="girls.php"onmouseover="style.color='olive'"
                  onmouseout="style.color='black'"><b>House Girls</b></a>

			       <a href="boys.php"onmouseover="style.color='olive'"
		             onmouseout="style.color='black'"><b>Shamba Boys</b></a>

			       <a href="contact us.php"onmouseover="style.color='olive'"
                   onmouseout="style.color='black'"><b>Contact Us</b></a>

			    <a href="Faqs.php"onmouseover="style.color='olive'"
               onmouseout="style.color='black'"><b>FAQs</b></a>

		
</div>
</div> <!-- end menu -->


<h2>Login Portal</h2>
<hr>
<divid="maincontainers">
<div id="containers">
<div>
<p>Please enter your login details(user name and password) in the portal below to
<ul>
 <li>get access to your account,</li>
 <li>update profile infomation and</li>
 <li>utilize all the resources available.</li>
</ul>

<br> 
To regestered members only.

<div id="log">
<center>
	<div>
	<form action="demo_form.asp" method="get">
<b onmouseover="style.color='blue'"onmouseout="style.color='green'">Username: </b><input type="text" id="fname" onblur="myFunction()" oninvalid="alert('You must fill out the form!');" name="fname" required>
<script>
function myFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}
</script>
</form>
<form action="demo_form.asp" method="get">
  <b onmouseover="style.color='blue'"onmouseout="style.color='green'">Password:</b> <input type="password" oninvalid="alert('You must fill out the form!');" password="" required pattern=".{6,}"><br>
  <input id="Submit" type="submit" name="submit"value="Login"><br>
</form>
	<a href="forgotpassword.php"onmouseover="style.color='green'"onmouseout="style.color='blue'"><h3>Forgot password?<h3></a>
	<h3>Not registered? Click <a href="sign.php"onmouseover="style.color='green'"onmouseout="style.color='blue'">here to create an account</a><h3>
	
<script>
document.getElementById("myInput").addEventListener("invalid", myFunction);

function myFunction() {
    alert("Must contain 6 to 8 characters");
}
</script>
</div>
	</center
	</div>
	
</body>
<div id="footer">
<p><a href="Terms of use.php"onmouseover="style.color='blue'"onmouseout="style.color='green'"><b>Terms of use</b></a></p>

<p>Copyright (c) Nelson Anjere</p>

<p><a href="home.php"onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>Home|</b></a>
<a href="about.php"onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>About Us|</b></a>
<a href="girls.php"onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>House Girls|</b></a>
<a href="boys.php"onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>Shamba Boys|</b></a>
<a href="contact us.php"onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>Contact Us|</b></a>
<a href="faqs.php"onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>FAQ</b></a>
</p>

</div> <!-- end of footer -->

</html>
			