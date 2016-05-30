<!DOCTYPE html>
<html lang="en">
<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="dropdown.css">
  <title>NelixHousehelp</title>
  <meta name="author" content="Nelson Anjere">
  <script type="text/javascript" src="jquery-1.12.3.js">
 </script>
  <script type="text/javascript"
  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
 </script>
  <script type="text/javascript">
        $(document).ready(function(){
    $("button").click(function(){
    $("#k").hide(1000);
});
});
$(window).scroll(function(){
  console.log('Your are scrolling a page!');
});
  </script>
  <link rel="stylesheet" type="text/css" href="final.css">
</head>

<body>

<div id="container">

<div id="header">

<center>
<h1 onmouseover="style.color='red'" onmouseout="style.color='black'">NELIX
HOUSEHELP</h1>
</center>

<div class="dropdown">
<button id="myBtn" class="dropbtn">MENU</button>

<div id="myDropdown" class="dropdown-content">
  <a href="home.php" onmouseover="style.color='midnightBlue'"onmouseout="style.color='black'">Home</a>
   <a href="about.php"onmouseover="style.color='midnightBlue'" onmouseout="style.color='black'">About Us</a>
     <a href="girls.php" onmouseover="style.color='midnightBlue'"onmouseout="style.color='black'">House Girls</a>
      <a href="boys.php"onmouseover="style.color='midnightBlue'" onmouseout="style.color='black'">ShambaBoys</a>
      <a href="contact us.php" onmouseover="style.color='midnightBlue'"onmouseout="style.color='black'">Contact Us</a>
      <a href="Faqs.php"onmouseover="style.color='midnightBlue'" onmouseout="style.color='black'">FAQs</a> </div>
</div>
<script type="text/javascript">
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
}</script>
<!-- end header -->

<div id="Menu1">

<center>
<script type="text/javascript">
function mDown(obj) {
    obj.style.backgroundColor = "#1ec5e5";
    obj.innerphp = "Thank You";
}

function mUp(obj) {
    obj.style.backgroundColor="#D94A38";
    obj.innerphp="Thank You";
}</script>

<p id="k"></p>
</center>
</div>
</div>

<center>
<h1>Create a safe and a happy home for your kids</h1>
</center>
<iframe src="slideshow.html" width="500" height="250">
</iframe>


<div id="Fammy">
<h2>Families Relating With Domestic Personnel</h2>

<p>Families and domestic employees like house help and<br>
gardeners, must always make the most of their work and<br>
personal relationships. It is indeed a unique,if<br>
not a special relationship. Both parties must gaurd<br>
it jealously.</p>

<p>The relationship between the domestic worker and
the<br>
family members is unlike any other employer/employee<br>
relationship. If any other line of work most people<br>
would react to the thought of actually living with <br>
their bosses or employers under one roof,with either<br>
horror or laughter.Yet,this is the case,in the <br>
majority of the situations,when it comes to domestic<br>
employees.nelixhousehelp tries to make the best for<br>
both parties. </p>
</div>

<div id="bar">
<p>Are you tired of running to the so called house
girl bureaus and of calling your relactant up-country relatives for house
girls?</p>

<p>Do you feel tired of wasting your precious time training your house help
only for them to dissapear shortly after?</p>

<p>Are you tired of having to phone in to work every so often with the same
reason of your house help not having shown up after their weekend off?</p>

<p>Are you tired of worrying over whether or not your house help will return
after the weekend off?</p>

<p>Could you be sick and tired of unreliable, unprofessional house girls?</p>

<p>And, are you looking for professional, experianced child-care to look after
your children and give good care?</p>

<p>Worry no more. At <b>NELIX HOUSEHELP</b>, we have the solution to your
domestic help problems. </p>

<p>Some Important and Useful Documents Sample work
Agreement between families and househelp/Shamba Boys. <a href="agreement.pdf"
onmouseover="style.color='yellowgreen'" onmouseout="style.color='blue'"><b>Download
PDF</b></a> Sample Baby's Log for the guidance of house girls.<a href="beiby.pdf"
onmouseover="style.color='yellowgreen'" onmouseout="style.color='blue'"><b>Download
PDF</b></a> Sample Toddlers Log for the guidance of house girls.<a
href="daily log.pdf" onmouseover="style.color='yellowgreen'"
onmouseout="style.color='blue'"><b>Download PDF</b></a> </p>
</div>

<input type="button" value="Hide text"
onclick="document.getElementById('bar').style.visibility='hidden'">
<input type="button" value="Show text"
onclick="document.getElementById('bar').style.visibility='visible'"> </div>
</body>

<div id="footer">
<p style="text-align:center;margin-left:auto;margin-right:auto;"><a
href="Terms of use.php" onmouseover="style.color='blue'"
onmouseout="style.color='green'"><b>Terms of use</b></a></p>

<p style="text-align:center;margin-left:auto;margin-right:auto;">Copyright (c)
Nelson Anjere</p>

<p style="text-align:center;margin-left:auto;margin-right:auto;"><a
href="home.php" onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>Home|</b></a>
 <a href="about.php"onmouseover="style.color='green'" onmouseout="style.color='blue'"><b>AboutUs|</b></a>
 <a href="girls.php" onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>House Girls|</b></a>
 <a href="boys.php"onmouseover="style.color='green'" onmouseout="style.color='blue'"><b>ShambaBoys|</b></a>
 <a href="contact us.php" onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>Contact Us|</b></a>
 <a href="faqs.php"onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>FAQ</b></a> </p>
</div>
<!-- end of footer -->
</html>
