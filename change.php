<?php
session_start();
include('./inc/dblink.php');

$username = $_POST['Username'];
        $password = $_POST['Oldpassword'];
        $opwd = $_POST['Oldpassword'];
        $newpassword = $_POST['Newpassword'];
        $npwd = $_POST['Newpassword'];
        $cpwd = $_POST['password2'];
        $s = "SELECT pwd FROM login WHERE username='$username'";
        $result=mysqli_query($conn,$s);
                if($newpassword=$cpwd){
                $s2 = "UPDATE login SET pwd='$newpassword' where username='$username'";
                $sq=mysqli_query($conn,$s2);
                $s3="UPDATE pwd SET oldpwd='$opwd' WHERE username='$username'";
                $se=mysqli_query($conn,$s3);
                $s4="UPDATE pwd SET newpwd='$npwd' WHERE username='$username'";
                $st=mysqli_query($conn,$s4);
               if($sq&&$se&&$st)
                {
                echo "Congratulations You have successfully changed your password";
                header('location:./home.php');
                }
               else
                {
               echo "Passwords do not match";
               }
        }
              ?>