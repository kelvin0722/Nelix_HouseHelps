<?php
  require_once 'connect.php';


  $user_check = $_SESSION['login_user'];

  $ses_sql = mysqli_query($con,"SELECT username FROM membertbl WHERE username = '$user_check' ");

  $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

  $login_session = $row['username'];

  if(!isset($_SESSION['login_user'])){
    mysqli_close($con);
     header("location:login.php");
  }
  ?>
