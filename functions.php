<?php
extract($_POST);
 function add_member()
 {
   // Create connection
    require_once 'connect.php';
     $sql="INSERT INTO membertbl (id,firstname,secondname,password,emailaddress,dateofbirth,marritalstatus,city,county)
      VALUES
      ('$_POST[id]','$_POST[fname]','$_POST[sname]','$_POST[pass]','$_POST[email]','$_POST[dob]','$_POST[status]','$_POST[city]','$_POST[county]')";

      if (!mysqli_query($con,$sql))
      {
      die('Error: ' . mysqli_error($con));
      }
      header("location:home.php");

      mysqli_close($con);
  }
 ?>
