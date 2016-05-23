<!DOCTYPE html>
<html lang=en>
<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->
<head>
<link rel="stylesheet" type="text/css" href="dropdown.css">
	<title>About Us</title>
	
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
    <a href="home.php"onmouseover="style.color='teal'"onmouseout="style.color='black'">Home</a>
    <a href="about.php"onmouseover="style.color='teal'"onmouseout="style.color='black'">About Us</a>
    <a href="girls.php"onmouseover="style.color='teal'"onmouseout="style.color='black'">House Girls</a>
    <a href="boys.php"onmouseover="style.color='teal'"onmouseout="style.color='black'">Shamba Boys</a>
    <a href="contact us.php"onmouseover="style.color='teal'"onmouseout="style.color='black'">Contact Us</a>
    <a href="Faqs.php"onmouseover="style.color='teal'"onmouseout="style.color='black'">FAQs</a>
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
<div id="content">
<p>Welcome and get professional hardworking househelp/shamba boys.</p>
<p >Nelixhousehelp.com is a 100% linking parents with young kids and <br>professional househelp together. This premier linking site offers hardworking<br>, loving and young professional househelps and shamba boys.</p>
<p >Maybe you have experience alot with your previous househelp/Shamba boy and <br>you want totally different type of househelp. This site has all that you are looking for.</p>
<p>We're sure that you will find Nelixhousehelpthe ultimate to get chamming<br>, warm and welcoming househelps.
			
		
<h2>What makes a househelp to stay.</h2>
<p>Some employers live with them for years and others for days. Is the problem the woman <br>or the house-help?</p>

<p>Treat her well and she will last, treat her like trash and she will unleash her wrath<br>on your child. That is the general rule of thumb for some women who employ house-girls</p>

<p>However, there is also the possibility that if you treat her well, she may take<br> the advantage of your generosity and you will be forced to fire her.</p>

<p>So just what makes a house girl last for long? Of course there are some who leave<br> for greener pastures or personality differences with the boss. Here are some <br>of the major reasons that contribute to how long a girl will last at her<br> place of employment. <a href="girls stay.php"onmouseover="style.color='teal'"onmouseout="style.color='blue'"><b>Continue reading</b></a> </p>
</div>
			
<br>
<div id="sidebar">
			<h3>More about the site</h3>
                        
			<ul>
				<img src="chat.jpg" alt="Chat" width="70" height="40"><a href="#"><b>Join the buzz Chat!</b></a></li>
				<p>Login to your account now to start chatting with other regestered members right a way. <a href="login.php"onmouseover="style.color='teal'"
                 onmouseout="style.color='blue'"><b>Join now.</b></a></p>
			<br>
				<img src="me.jpg" alt="testimonials" width="70" height="40"><a href="#"><b>Clients Testimonials</b></a></li>
				<p>Please take a look at what some of our delighted clients had to say about our services. <a href="testimonials.php"onmouseover="style.color='teal'"onmouseout="style.color='blue'"><b>Read on.</b></a></p>
			<br>
				<img src="join.jpg" alt="join" width="70" height="40"><a href="#"><b>Be a member now</b></a></li>
				<p>New?Build your personal profile right a way and start mingling with other members. <a href="member.php"onmouseover="style.color='teal'"
                onmouseout="style.color='blue'"><b>Join Now.</b></a></p>
			<br>
			</ul>
</div> <!--end of sidebar -->


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
			