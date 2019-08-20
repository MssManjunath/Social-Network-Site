<?php
session_start();
session_destroy();

header("Location: index.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        body {
       background-image: url("./img/cold-vehicles-water-531880\ \(1\).jpg") ;
       margin: 0;
        padding:0;
        font-family: "Comic Sans MS";
        background-size: cover;
        background-repeat: no-repeat;
      }
      
    </style>
</head>
<body>
<h1>Logged out</h1>
</body>
</html>
