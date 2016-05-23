<!DOCTYPE html>
<html lang="en">
<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="dropdown.css">
  <title>Shamba Boys</title>
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
  <a href="home.php" onmouseover="style.color='plum'"onmouseout="style.color='black'">Home</a> 
   <a href="about.php"onmouseover="style.color='plum'" onmouseout="style.color='black'">About Us</a>
   <a href="girls.php" onmouseover="style.color='plum'"onmouseout="style.color='black'">House Girls</a>
  <a href="boys.php"onmouseover="style.color='plum'" onmouseout="style.color='black'">ShambaBoys</a> 
 <a href="contact us.php" onmouseover="style.color='plum'"onmouseout="style.color='black'">Contact Us</a>
<a href="Faqs.php"onmouseover="style.color='plum'" onmouseout="style.color='black'">FAQs</a> </div>
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

<table border="5" style="width: 100%">
  <col>
  <col>
  <col>
  <col>
  <tbody>
    <tr>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Shambaboy1" src="1.jpg" width="208" height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>19/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Kajiado</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Shambaboy2" src="2.jpg" width="208" height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>20/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Kilifi</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>
            </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Shambaboy3" src="sha.jpg" width="208" height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>22/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Machakos</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Shambaboy4" src="sha1.jpg" width="208"
                height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>23/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Kakamega</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Houseboy5" src="images12.jpeg" width="208"
                height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>22/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Muranga</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Houseboy6" src="images15.jpeg" width="208"
                height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>24/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Siaya</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

               <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Houseboy7" src="images16.jpeg" width="208"
                height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>23/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Baringo</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Houseboy8" src="images17.jpeg" width="208"
                height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>21/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Malindi</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Houseboy9" src="images19.jpeg" width="208"
                height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>24/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Taita</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Houseboy10" src="images22.jpeg" width="208"
                height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>23/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Bungoma</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Shambaboy11" src="2.jpg" width="208" height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>23/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Nyeri</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        <table border="5">
          <col>
          <tbody>
            <tr>
              <td><img alt="Shambaboy12" src="nelix.jpg" width="208" height="250"> 

                <table border="3">
                  <col>
                  <col>
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>20/Male</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Maseno</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>

                <p><a href="login.php"><b>View my Profile</b></a></p>

                <p><a href="login.php"><b>Contact me now</b></a></p>

              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

<div id="footer">
<p><a href="Terms of use.php" onmouseover="style.color='blue'"
onmouseout="style.color='green'"><b>Terms of use</b></a></p>

<p>Copyright (c) Nelson Anjere</p>

<p><a href="home.php" onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>Home|</b></a>
  <a href="about.php"onmouseover="style.color='green'" onmouseout="style.color='blue'"><b>AboutUs|</b></a>
   <a href="girls.php" onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>House Girls|</b></a> 
  <a href="boys.php"onmouseover="style.color='green'" onmouseout="style.color='blue'"><b>ShambaBoys|</b></a> 
 <a href="contact us.php" onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>Contact Us|</b></a>
<a href="faqs.php"onmouseover="style.color='green'"onmouseout="style.color='blue'"><b>FAQ</b></a> </p>
</div>
<!-- end of footer -->
</div>
</body>
</html>
