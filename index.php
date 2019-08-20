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
                <form action="inc/login.php" method="POST">
                    <h1>
                        <u>Login</u>
                    </h1>
            <p>Username
                             <input type="text" name="user_login" placeholder="Username" class="box" required>
            </p>
                <p>Password
                    <input type="password" name="password_login" placeholder="Password" class="box" required>
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
          
            <div class="loginbox1">
                    <h2>Sign up Below ...</h2>
                   <form action="inc/signup.php" method="post">
                   <input type="text"  name="fname"  class="box1" placeholder="First Name"><p />
                   <input type="text"  name="username" class="box1" placeholder="Username"><p />
                   <input type="text"  name="email" class="box1" placeholder="Email"><p />
                   <input type="password"  name="password" class="box1" placeholder="Password"><p />
                   <input type="password"  name="password2" class="box1" placeholder="Repeat Password ..."><p />
                   <input type="submit" name="reg" value="Sign Up!"class="bu">
                   </form>
                   </div>
</body>