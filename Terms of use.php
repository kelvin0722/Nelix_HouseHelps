<!DOCTYPE html>
<html lang=en>
<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->
<head>
<link rel="stylesheet" type="text/css" href="dropdown.css">
<title>Terms of Use</title>
	
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
<h1 onmouseover="style.color='olive'"onmouseout="style.color='black'">NELIX HOUSEHELP</h1>
</center>

<div class="dropdown">
<button id="myBtn" class="dropbtn">MENU</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="home.php"onmouseover="style.color='red'"onmouseout="style.color='black'">Home</a>
    <a href="about.php"onmouseover="style.color='red'"onmouseout="style.color='black'">About Us</a>
    <a href="girls.php"onmouseover="style.color='red'"onmouseout="style.color='black'">House Girls</a>
    <a href="boys.php"onmouseover="style.color='red'"onmouseout="style.color='black'">Shamba Boys</a>
    <a href="contact us.php"onmouseover="style.color='red'"onmouseout="style.color='black'">Contact Us</a>
    <a href="Faqs.php"onmouseover="style.color='red'"onmouseout="style.color='black'">FAQs</a>

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
    obj.innerHTML = "Thank You";
}

function mUp(obj) {
    obj.style.backgroundColor="#D94A38";
    obj.innerHTML="Thank You";
}
</script>
			
			<p id="k"></p>
			
			</div>
			</div>
<br>

<h1>Terms of use</h1>
<div>
<p>Are you looking for professional house help?Nelixhousehelp.com is the way to go. Our free personal classfields help you to quickly meet professional house help in Nairobi and all over the country. To get your personal up is very easy. You just have to regester</p>
<br>
<p>You need to be as descriptive as possible and tell the world the type of househelp your looking for. Remember to  add your own description and also cute photo to your profile. You will be suprised by the huge number of house help who are interested in working for you</p>
<br>
<p>All the best in finding a househelp</p>
<div>


</body>
<div id="footer">


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
			