
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en" lang="en">
<!-- Designed and Compiled by Nelson Anjere. Copyright May 2016 -->
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <title>House Girls</title>
  <link rel="stylesheet" type="text/css" href="dropdown.css" />
  <meta name="author" content="Nelson Anjere" />
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
  <link rel="stylesheet" type="text/css" href="final.css" />
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
   <a href="home.php" onmouseover="style.color='olive'"onmouseout="style.color='black'">Home</a> 
     <a href="about.php"onmouseover="style.color='olive'" onmouseout="style.color='black'">About Us</a>
     <a href="girls.php" onmouseover="style.color='olive'"onmouseout="style.color='black'">House Girls</a> 
    <a href="boys.php"onmouseover="style.color='olive'" onmouseout="style.color='black'">ShambaBoys</a> 
  <a href="contact us.php" onmouseover="style.color='olive'"onmouseout="style.color='black'">Contact Us</a>
 <a href="Faqs.php"onmouseover="style.color='olive'" onmouseout="style.color='black'">FAQs</a> </div>
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

<div>

<table border="5" style="width: 100%">
  <col />
  <col />
  <col />
  <col />
  <tbody>
    <tr>
      <td>
        <table border="5">
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl1" src="s2.jpg" width="208" height="250"
                /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>22/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Nakuru</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl2" src="S.jpg" width="208" height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>19/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Nyahururu</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl3" src="5.jpg" width="208" height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>21/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Matuu</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Married</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl4" src="n2.jpg" width="208" height="250"
                /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>28/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Bungoma</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Married</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl5" src="images.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>23/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Nairobi</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl6" src="images1.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>22/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Nairobi</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Married</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl7" src="images2.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>22/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Ngong</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl8" src="images3.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Busia</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl9" src="images4.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>22/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Meru</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl10" src="images5.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>23/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Nanyuki</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl11" src="images6.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>21/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Kisii</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl12" src="images7.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>25/Female</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl13" src="images8.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>20/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Nairobi</td>
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
          <col />
          <tbody>
            <tr>
              <td><p><img alt="Housegirl14" src="images9.jpeg" width="208"
                height="250" /></p>

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>24/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Nyandarua</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl15" src="images10.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>22/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Kisumu</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>Married</td>
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
          <col />
          <tbody>
            <tr>
              <td><img alt="Housegirl16" src="images11.jpeg" width="208"
                height="250" /> 

                <table border="3">
                  <col />
                  <col />
                  <tbody>
                    <tr>
                      <td>Age/Sex</td>
                      <td>20/Female</td>
                    </tr>
                    <tr>
                      <td>Town/City</td>
                      <td>Lodwar</td>
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
</div>

<div id="footer">
<p><a href="Terms of use.php" onmouseover="style.color='blue'"
onmouseout="style.color='green'"><b>Terms of use</b></a></p>

<p>Copyright (c) Nelson Anjere</p>

<p><a href="home.php" onmouseover="style.color='green'"
onmouseout="style.color='blue'"><b>Home|</b></a> <a href="about.php"
onmouseover="style.color='green'" onmouseout="style.color='blue'"><b>About
Us|</b></a> <a href="girls.php" onmouseover="style.color='green'"
onmouseout="style.color='blue'"><b>House Girls|</b></a> <a href="boys.php"
onmouseover="style.color='green'" onmouseout="style.color='blue'"><b>Shamba
Boys|</b></a> <a href="contact us.php" onmouseover="style.color='green'"
onmouseout="style.color='blue'"><b>Contact Us|</b></a> <a href="faqs.php"
onmouseover="style.color='green'"
onmouseout="style.color='blue'"><b>FAQ</b></a> </p>
</div>
<!-- end of footer -->
</div>
</body>
</html>
