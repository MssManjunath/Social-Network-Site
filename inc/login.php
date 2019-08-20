<?php
  include('dblink.php');
  session_start();
   
    $username = $_POST['user_login'];
    $pwd = $_POST['password_login'];

    $sql = "select pwd from login where username='$username';";


   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);

   if ($row['pwd'] == $pwd)
   {
     $_SESSION['Username']=$username;
     $_SESSION['id']=$id;
   
    header('location:../home.php');
   }
   else
   {
       echo"Login Failed";
   }
?>