function focusFunction() {
    // Focus = Changes the background color of input to yellow
    document.getElementById("myInput").style.background = "yellow";
}



function blurFunction() {
    // No focus = Changes the background color of input to red
    document.getElementById("myInput").style.background = "";
}
function myFunction(x) {

  //verify user passwords

    x.style.background = "yellow";
}
function fnam()
{
  var fnam=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t2.value.search(fnam)==-1)
    {
	 alert("enter correct  first name");
	 document.f1.t2.focus();
	 return false;
	 }
	}

	 function snam()
{
  var snam=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t3.value.search(snam)==-1)
    {
	 alert("enter correct second name");
	 document.f1.t3.focus();
	 return false;
	 }
	 }

	function pass()
	{
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
   if(document.f1.p1.value.search(pass)==-1)
    {
	 alert("enter correct pass");
	 document.f1.p1.focus();
	 return false;
	 }
	 }

	function pass()
	{
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
   if(document.f1.p1.value.search(pass)==-1)
    {
	 alert("confirm password");
	 document.f1.p1.focus();
	 return false;
	 }
function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.t6.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t6.focus();
	 return false;
	 }

	 }
	 }
	function date()
	{
	var date=/^[0-9]{9,14}$/;
  if(document.f1.t7.value.search(date)==-1)
    {
	 alert("enter date of birth");
	 document.f1.t7.focus();
	 return false;
	 }
	 }

	function gender()
	{
	var gender=/^[a-zA-Z0-9- ]{10,150}$/;
  if(document.f1.t8.value.search(add)==-1)
    {
	 alert("enter gender");
	 document.f1.t8.focus();
	 return false;
	 }
	 }

	 function status()
	 {
	 var status=/^[a-zA-Z]{5,30}$/;
	 if(document.f1.t9.value.search(status)==-1)
    {
	 alert("enter marital status");
	 document.f1.t9.focus();
	 return false;
	 }

	 }

	  function city()
	 {
	 var city/town=/^[a-zA-Z]{5,30}$/;
	 if(document.f1.t10.value.search(city/town)==-1)
    {
	 alert("enter your city or town");
	 document.f1.t10.focus();
	 return false;
	 }
	 function county()
	 {
	 var county=/^[a-zA-Z]{5,30}$/;
	 if(document.f1.t11.value.search(county)==-1)
    {
	 alert("enter your city or town");
	 document.f1.t11.focus();
	 return false;
	 }

	 }

function vali()
{
  var nam=/^[a-zA-Z]{4,15}$/;
   var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
    var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	 	var date=/^[0-9]{9,14}$/;
	  var gender=/^[a-zA-Z0-9 ]{10,150}$/;
	  var city=/^[a-zA-Z]{5,30}$/;
	  var county=/^[a-zA-Z]{5,30}$/;
   if(document.f1.t1.value.search(nam)==-1)
    {
	 alert("enter correct  first name");
	 document.f1.t2.focus();
	 return false;
	 }

  else if(document.f1.t3.value.search(nam)==-1)
    {
	 alert("enter correct second name");
	 document.f1.t2.focus();
	 return false;
	 }

 else if(document.f1.p1.value.search(pass)==-1)
    {
	 alert("enter correct pass");
	 document.f1.p1.focus();
	 return false;
	 }
 else if(document.f1.p1.value.search(pass)==-1)
    {
	 alert("confirm password");
	 document.f1.p1.focus();
	 return false;
	 }

  else if(document.f1.t6.value.search(email)==-1)
    {
	 alert("enter correct login name");
	 document.f1.t3.focus();
	 return false;
	 }

	  else if(document.f1.t7.value.search(birth)==-1)
    {
	 alert("enter correct date of birth");
	 document.f1.t5.focus();
	 return false;
	 }


  else if(document.f1.t8.value.search(gender)==-1)
    {
	 alert("enter correct gender");
	 document.f1.t6.focus();
	 return false;
	 }

	else if(document.f1.t9.value.search(Status)==-1)
    {
	 alert("enter marital status");
	 document.f1.t7.focus();
	 return false;
	 }

		else if(document.f1.t10.value.search(city/town)==-1)
    {
	 alert("enter correct city/town");
	 document.f1.t11.focus();
	 return false;
	 }
	 else if(document.f1.t11.value.search(county)==-1)
    {
	 alert("enter your county");
	 document.f1.t11.focus();
	 return false;
	 }

	 else
	{
	 return true;
	 }
	 }
