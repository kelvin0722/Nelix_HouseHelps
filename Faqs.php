<!DOCTYPE html>
<html lang=en>
<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->
<head>
<link rel="stylesheet" type="text/css" href="dropdown.css">
<title>Frequently Asked Questions</title>

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
<br>


			<h1>Frequently Asked Questons</h1><p><form style="foat:right"> <input type="button" value="Print" onclick="window.print()" /> </form></p>
<div>
<div id="maincontainer">
<div id="container">

	<p>Below are some of the frequently asked questions we get about our services and agency.<br>Keep scrolling to the end of the page to a list of other important resources.</p>
</div>
<div>
	<ol>
		<p>
			<li><b>How do i sign up to be a member of this site?</b><br>Signing up is easy and quick.To do so simply <a href="signup.php"onmouseover="style.color='olive'"
                onmouseout="style.color='blue'"><b>Click here</b></a> to get started with the registration <br>process and start interacting online with other regestered members right a way.</li>
                <script>
window.onbeforeunload = function(event) {
    event.returnValue = "Read..";
};
</script>
			<li><b>Am i quaranteed to meet professional househelp here?</b>Absolutely!We are certain that  you will. Our loaded database of personals increases your chances of meeting several professional househelp here. Many individuals have had success stories, so do you.</li>
			<li><b>I'm NEW to this whole online thing,how does it work?</b>This site brings together mothers with young kids and professional househelp who are seeking each other for help and employment.Once you are regestered<br>,you will have the privillleges to browse complete profiles of other members,contact them, chat and initiate connections..etc.</li>
			<li><b>How can i be sure that you will keep my privecy?</b>we take the privacy of all of our members very seriously.We make it our business. None of your information wil be put to the open at any given tym,no matter the circumstances.Your privacy matters most to us as it does to you.</li>
			<li><b>Can i speak to my househelp/Boss before we physically meet?</b>Yes,you will first need to login to your account and communicate to the househelp/Boss so that you can make arrangements before the actual meeting.</li>
			<li><b>How do i create a profile?</b>In the webite header, click on "sign up" and follow the steps. Creating and posting a profile takes only a few minutes. Why wait?Creat your profile today!</li>
			<li><b>How do i update my profile?</b><br>Its quick and easy to do!To update your profile,just login to your account and then click on Edit/View profile,and follow the simple instructions.</li>
			<li><b>Can i deactivate my account?</b><br>Yes you can, is simple, just <a href="deactivate.php"onmouseover="style.color='olive'"onmouseout="style.color='black'"><b>Click here.</b></a></li>
			<li><b>Is there any limit to what i can put in my profile?</b><br>All members profiles,when they are originally created as well as when they are modified,must be aproved by our admin.We reserve the right to refuse any profile or photographs that we feel is in appropriate for this site.You must put your personal information including: Your home address, phone numbers, a functioning e-mail address.Failure to will be banned from this site.</li></p>
			<script>
function mouseDown() {
    document.getElementById("myP").style.color = "olive";
}

function mouseUp() {
    document.getElementById("myP").style.color = "green";
}
</script>


		</p>
	</ol>
</div>
</dv>
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
