<?php
extract($_POST);
 function add_member()
 {
   // Create connection
    require_once 'connect.php';
     $sql="INSERT INTO membertbl (id,firstname,secondname,emailaddress,dateofbirth,gender,marritalstatus,city,county,username,password)
      VALUES
      ('$_POST[id]','$_POST[fname]','$_POST[sname]','$_POST[email]','$_POST[dob]','$_POST[gender]','$_POST[status]','$_POST[city]','$_POST[county]','$_POST[uname]','$_POST[pass]')";
      if (!mysqli_query($con,$sql))
      {
      die('Error: ' . mysqli_error($con));
      }
      mysqli_close($con);
  }
  
  function add_profile_details(){
    
    require_once 'connect.php';
    
    $idno=mysqli_real_escape_string($con,$_POST['idno']);
    $firstname=mysqli_real_escape_string($con,$_POST['fname']);
    $lastname=mysqli_real_escape_string($con,$_POST['lname']);
    $age=mysqli_real_escape_string($con,$_POST['age']);
    $town=mysqli_real_escape_string($con,$_POST['town']);
    $maritalstatus=mysqli_real_escape_string($con,$_POST['maritalstatus']);
    $education=mysqli_real_escape_string($con,$_POST['education']);
    
    $sql="INSERT INTO employee_tbl(idno,firstname,lastname,age,Town,MaritalStatus,Education,profpic) VALUES(
     $idno,$firstname,$lastname,$age,$town,$maritalstatus,$education,$profpic )";
     if (!mysqli_query($con,$sql))
      {
      die('Error: ' . mysqli_error($con));
      }
      mysqli_close($con);
    
   
  }

  function login_member()
  {
    //create connection

    session_start();
    require_once 'connect.php';
    
   $admin='admin';
    $username=mysqli_real_escape_string($con,$_POST['uname']);
    $password=mysqli_real_escape_string($con,$_POST['pass']);
    $sql="SELECT *FROM membertbl WHERE username='$username' AND password='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count=mysqli_num_rows($result);

    if($count==1 &&$username=$admin){
      $_SESSION['login_user']=$username;
      header("location:admin.php");
    }
    
    if($count==1 &&$username!=$admin){
      $_SESSION['login_user']=$username;
      header("location:index.php");
      
    }
    else{
      $error="Your login name or passwords do not match!!";
      echo $error;
    }
mysqli_close($con);
  }

  function logout()
  {
    session_start();

   if(session_destroy())
   {
      header("location: login.php");
   }
}





 ?>
