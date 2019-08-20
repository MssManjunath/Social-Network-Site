<?php include ( "inc/connect.inc.php" ); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Social Network</title> 
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
        <div class="loginbox">
                <img src="./img/user-login-man-person-256.png" class="avatar">
                <form action="inc/login.php" method="post">
                    <h1>
                        <u>Login</u>
                    </h1>
            <p>Username
                             <input type="text" placeholder="Username" class="box">
            </p>
                <p>Password
                    <input type="password" placeholder="Password" class="box">
                </p>
                    <p>
                        <a href="#" class="ref1">Forgot Password </a>
                        <br>
                        <a href="#" class="ref">Sign Up?</a>
                    </p>
                    <p>
                        <input type="submit" value="Login" class="bu">
                    </p>
            
                </form>
            </div>