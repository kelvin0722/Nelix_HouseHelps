<!DOCTYPE html>
<html lang=en>
<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->
<head>
<link rel="stylesheet" type="text/css" href="dropdown.css">
	<title>Forgot Password</title>
	
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
	<div id="header">
	<center>
		<h1 onmouseover="style.color='red'"onmouseout="style.color='black'">NELIX HOUSEHELP</h1>
		</center>

		<div class="dropdown">
<button id="myBtn" class="dropbtn">MENU</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="home.php"onmouseover="style.color='olive'"onmouseout="style.color='black'">Home</a>
    <a href="about.php"onmouseover="style.color='olive'"onmouseout="style.color='black'">About Us</a>
    <a href="girls.php"onmouseover="style.color='olive'"onmouseout="style.color='black'">House Girls</a>
    <a href="boys.php"onmouseover="style.color='olive'"onmouseout="style.color='black'">Shamba Boys</a>
    <a href="contact us.php"onmouseover="style.color='olive'"onmouseout="style.color='black'">Contact Us</a>
    <a href="Faqs.php"onmouseover="style.color='olive'"onmouseout="style.color='black'">FAQs</a>
  </div>
</div>

<script>
// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("myBtn").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
	 <!-- end header -->
	<div id="Menu1"><center>
			

<script>
function mDown(obj) {
    obj.style.backgroundColor = "#1ec5e5";
    obj.innerphp = "Thank You";
}

function mUp(obj) {
    obj.style.backgroundColor="#D94A38";
    obj.innerphp="Thank You";
}
</script>
			
<p id="k"></p>
			
</div>
</div>

<div id="maincontainer">
<div id="container">
<p>Please enter the email address associated with your account in the text box below.

<br>

This is the email that you used when you initialy created your personal account with us.</p>
<div>
<center>
	<label for="email">E-mail address :</label>
	<input id="email" type="text" name="email"><br>
	<a href="reset_success.php"onmouseover="style.color='blue'"onmouseout="style.color='green'"><b><Reset</b>
	<input id="Submit" type="submit" name="submit"value="RESET">
	</center>
	</div>
	</div>
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