<!DOCTYPE html>
<html>
<head>
	<title>Basic form</title>
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
#submit{
	text-align: center;
}
	</style>
</head>
<body>
<div id="container">
	<div id="header">
		<h1>NELIX HOUSEHELP</h1>
	 <!-- end header -->
	<div id="Menu1">
			<a href="final.php">Home</a>
			<a href="girls.php">House Girls</a>
			<a href="boys.php">Shamba Boys</a>
			<a href="contact us.php">Contact Us</a>
			<a href="Faqs.php">FAQs</a>
			<div id="logs">
			<a href="login.php">Login|</a>
			<a href="sign up.php">Sign Up</a>
			</div>
		</div>
	</div> <!-- end menu -->
<h1>Basic form</h1>
<hr>
<form action="#">
<fieldset>
	<legend>Form information</legend>
	<div>
		<label for="username">Name</label>
		<input id="username"type="text" name="username" value="username here">
		</div>
	<div>
	<label for="email">E-mail address</label>
	<input id="email" type="text" name="email"><br>
	<label for="Passwor">Password</label>
	<input id="Password"type="text/number"name="Password">
	</div>
	<div>
		<input id="Submit" type="submit" name="submit"value="Login">
	</div>
	<div>
		<label for="capital city">capital city</label>
		<select id="capital city" name="capital city">
		<option value="">select value..</option>
			<option value="NA">Nairobi</option>
			<option value="KA">Kampala</option>
		</select>
		</div>
	</div>
	</fieldset>
</fieldset>
</form>
</body>
</html>