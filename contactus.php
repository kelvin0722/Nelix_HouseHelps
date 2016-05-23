<!DOCTYPE html>
<html lang=en>
<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->

<head>
<link rel="stylesheet" type="text/css" href="dropdown.css">
<title>Contact Us</title>

<style type="text/css">
.form-field{
	clear: both;
	padding: 10px;
	width: 350px;
}
.form-field label{
	float: left;
	width: 150px;
	text-align: right;
}
.form-field input{
	float: right;
	width: 150px;
	text-align: left;
}
	.form-field input{
		float: left;
		width: 350px;
		clear: both;
}
.form-field input{
	clear: both;
	padding: 10px;
	width: 650px;
}
.form-field input{
	padding: 10px;
	width: 350;
	clear: both;
}
#submit{
	text-align: center;
	float: center;
	display: block;
}
	</style>

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


<div id="maincontainer">
<div id="container">
<h1>Contact us</h1>
<hr>
<p>We appreciate your interest to communicate with us. We hope that your experiance has been pleasarable and you are enjoying the joney of finding a professional househelp/Shamba boy. Please complete the contact form below in as much details as possible and we will respond to your enquiry within 24hrs.</p>

<form action="#">
	<div>
	<div id="">
	<center>
	<script>
function myFunction(x) {
    x.style.background = "yellow";
}
</script>
<form method="post" action="connect.php">
		<label for="username"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Your Full Name :</b></label>
		<input id="username"type="text"onfocus="myFunction(this)"  name="username" value="username here">

<br><br>
	<label for="email"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">E-mail address :</b></label>
	<input id="email" type="text"onfocus="myFunction(this)"  name="email">
<br><br>
	<label for="Phone Number"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Phone Number :</b></label>
	<input id="Phone Number"type="number"onfocus="myFunction(this)" name="Phone Number">
<br><br>
	<label for="Email Subject"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Email Subject :</b></label>
	<input id="Email Subject" type="text/number"onfocus="myFunction(this)" name="Email subject">
<br><br>
	<label for="Your message"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Your Message :</b></label>
	<input id="Your message"type="text/number"onfocus="myFunction(this)" name="Your message">
<br><br>
	<label for="Security code"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Security Code :</b></label>
	<input id="Security code"onfocus="myFunction(this)" name="Security Code">
<br>
<br>
Cant read the above security code?<a href="#"<b onmouseover="style.color='blue'"onmouseout="style.color='green'"><b>Refresh</b></a>

	<div>
		<input id="Submit" type="submit" name="submit"value="Send">
		</center>
		</div>
		</div>
  </form>

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
