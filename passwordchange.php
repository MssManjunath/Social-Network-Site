<?php
Session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Social Network</title> 
    <link rel="stylesheet" href="css/style.css";>
</head>
<body>
        <div class="loginbox">
                <img src="./img/user-login-man-person-256.png" class="avatar">
                    <h1>
                        <u>Password Change</u>
                    </h1>
                    <form action="change.php" method="POST">
                             <input type="text" name="Username" placeholder="Username" class="box" required>
                             <input type="password" name="Oldpassword" placeholder="Old Password" class="box" required>
                             <input type="password" name="Newpassword" placeholder="New Password" class="box" required>
                             <input type="password" name="password2" placeholder="New Password" class="box" required>
                             <input type="submit" value="Confirm" class="bu">
            
                </form>
            </div>
