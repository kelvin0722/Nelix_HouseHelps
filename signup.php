
<!DOCTYPE html>
<html>
<head>
<html lang=en>
<script type="text/javascript" src="sign.js"></script>
<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->
<head>
<link rel="stylesheet" type="text/css" href="dropdown.css">
<title>Sign Up</title>

<meta name="author" content="Nelson Anjere" />
<style text="css">
.styled-button-10 {
	background:#5CCD00;
	background:-moz-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#5CCD00),color-stop(100%,#4AA400));
	background:-webkit-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	background:-o-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	background:-ms-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	background:linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#5CCD00', endColorstr='#4AA400',GradientType=0);
	padding:10px 15px;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:16px;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:1px solid #459A00
}
em{
	color:blue;
}
</style>
<script type="text/javascript" src="jquery-1.12.3.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
	$(document).ready(function(){
    $("button").click(function(){
    $("#k").hide(1000);
});
});

function verifypassword()
{
	var input1=document.getElementById('pass').value;
  var input2=document.getElementById('cpass').value;

	var error="The passwords do not match!!";

 if(input1 != input2)
 {
   var error_msg="<em style='color:red'>passwords do not match!!!</em>";

	 var output=document.getElementById('cp');

	 output.innerHTML=error_msg;
 }

 if( input1 == input2)
 {
    var divert="<label>Confirm Password:</label>";
		var output=document.getElementById('cp');

 	 output.innerHTML=divert;


 }

 }

 function hide_msg(){
	 $(document).ready(function (){
  	$('#user_account').hide();

	 });
 }
 $(function(){

	 $('#next').click(function(){
	$('#user_detail').slideUp();
	$('#user_account').show();

	 });

 });
 $(function(){

	$('#prev').click(function(){
 $('#user_detail').slideDown();
 $('#user_account').hide();

	});

 });

 <!-- Ajax code that adds memmbers into the database -->

 $(function(){

    $('#submit').click(function(){
     $('#container').append('<img src = "img/ajax/ajax-loader.gif" alt="Currently loading" id = "loading" />');
    $.ajax({
            url: 'add_member.php',
            type: 'POST',
            data: $('#form1').serialize(),
            success: function(result){
                 $('#response').remove();
                 $('#container').append('<p id = "response">' + result + '</p>');
                 $('#loading').fadeOut(1000);
				  $('#form1').trigger("reset");
				 $('#container').append('<em id="success">User Successfully registered!</em>');
				  $('#success').fadeOut(1000);

               }

         });

    });
 });

	</script>
	<link rel="stylesheet" type="text/css" href="final.css">

</head>
<body onload="hide_msg()">
<div>
<div style="width:25%;float:right">
<br><br><br><br><br>
</div>
<br><br>
<center><div style="width:70%;float:right" align="center">
<fieldset style="background:rgb(128,128,128);width:50%">
<br><br>


<!-- Begining of form -->

<form method="post" name="f1" action="add_member.php" id="form1">
<table width="366" border="0" align="center">
<div id="logs">
			<a href="userprofile/login.php"><b>Login</b></a>
			</div>

	<div id="header"><center>
		<h1><font face="comic sans MS" size="+3" color="#f1f1f1">Register Yourself</font></h1>
		</center>
	 <!-- end header -->
<div id="container">
<div id="user_detail">
<br>
<b onmouseover="style.color='green'"onmouseout="style.color='blue'">IDNO: </b>
   <input type="text" name="id" id="myInput" onfocus="focusFunction()" onblur="blurFunction()" required="true">
<br><br>
<b onmouseover="style.color='green'"onmouseout="style.color='blue'">First&nbsp;Name: </b>
   <input type="text" name="fname" id="myInput" onfocus="focusFunction()" onblur="blurFunction()" required="true">
<br><br>
<b onmouseover="style.color='green'"onmouseout="style.color='blue'">Second Name: </b><input type="text" name="sname" id="myInput" onfocus="focusFunction()" onblur="blurFunction()">
<br><br>
	<div>
		<label for="Date of Birth"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Date of Birth :</b></label>
		<input type="date" onfocus="validate_email()" name="dob">
		<div>
			<b onmouseover="style.color='green'"onmouseout="style.color='blue'">Gender/Sex :</b>
			<input type="radio"id="Male"name="gender" value="1">
			<label for="male"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Male</b></label>
			<input type="radio" id="Female" name="gender" value="0">
			<label for="female"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Female</b></label>
			</div>
		<div>
			<b onmouseover="style.color='green'"onmouseout="style.color='blue'">Marital Status :</b>
			<input type="radio" id="Married" name="status" value="0">
			<label for="Married"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Married</b></label>
			<input type="radio" id="Single" name="status" value="1">
			<label for="Single"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Single</b></label>
			</div>
			<br>
		<div>
			<label for="City/Town"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">City/Town</b></label>
			<input id="City/town" type="text"onfocus="myFunction(this)" name="city"><br>
			<br>
			<label id="County"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">County</b></label>
			<input id="county" type="text"onfocus="myFunction(this)" name="county"><br><br>
			<input id="next" class="styled-button-10" type="button" value="Next">
			</div>
		</div>
	</div>
			<div id="user_account">
				<!-- User account information-->
				<br><br>
				<b onmouseover="style.color='green'"onmouseout="style.color='blue'">Username: </b><input type="text" name="uname" id="myInput" onfocus="focusFunction()" onblur="blurFunction()">
				<br><br>
					<label for="Password"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Enter Password   :</b></label>

					<input id="pass" name="pass" type="password"onfocus="myFunction(this)"name="password">
				<br><br>

					<label id="cp" for="confirm password"><b onmouseover="style.color='green'"onmouseout="style.color='blue'">Confirm Password :</b></label>

					<input id="cpass"type="password"name="confirm password" onmouseout="verifypassword()"><br>
				<br>
					<label for="Email Address"><b  onmouseover="style.color='green'"onmouseout="style.color='blue'">Enter Email Address :</b></label>

					<input id="emailadd"   type="email" name="email" required><br><br>
					<input id="prev" class="styled-button-10" type="button" value="Prev">
					<input id="submit" class="styled-button-10" type="button" value="Submit">

					<!--  -->
			</div>
	<div>

		</div>
		</div>
		</div> <!-- End of page -->


</table>
 </form>
</fieldset>
</div>
</center>

</div>
</body>
<!--Script to validate email  -->
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script>
		$('#form1').validate();
		</script>
</html>
<!---PHP VALIDATION -->
