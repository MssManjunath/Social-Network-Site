<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "myDb";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
session_start();
    $username=$_SESSION['Username'];   
    $desc=$_POST['desc'];
    $dob=$_POST['dob'];
    $place=$_POST['place'];

    $rr = "INSERT INTO bio(username,bi,dob,place) VALUES ('$username','$desc','$dob','$place');";
    $sr=mysqli_query($conn,$rr);
    if($sr)
        echo"Success";
    else
        echo"failure";
    ?>