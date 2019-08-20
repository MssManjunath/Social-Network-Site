<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Description</title>
</head>
<style>
     body{
        margin: 0;
        padding:0;
        font-family: "Comic Sans MS";
        background-image: url("../img/abandoned-aircraft-airplane-919606.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        text-align: center;
    }
    .details{
        border-radius: 10px;
        padding: 32px;
        margin: 20px;
        width: 800px;
    }
   
</style>
<body>
<form action="./desc1.php" mode="POST">
    <input type="text" name="email" placeholder="Enter your Bio" class="details">
    <input type="Date" name="dob" placeholder="Dob">
    <input type="text" name="place" placeholder="Place">
    <input type="submit" name="submit1" value="Submit">
    </form>
    <body>
    </html>
