<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
    
</head>
<style>
    body{
        margin: 0;
        font-family: "Comic Sans MS",sans-serif;
        background-image: url("img/cold-vehicles-water-531880 (1).jpg");
        background-size: cover;
        
    }
    header{
        background-image: url("./img/cold-vehicles-water-531880 (1).jpg");
        background-attachment: fixed;
        box-shadow: 0 0 12px black;
        border-radius: 6px;
        padding: 3px;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
    }
    main{
        padding: 32px;
        font-size: 20px;
    }
    footer{
        line-height: 10px;
        background-image: url("img/lightbulbs.jpg");
        text-align: center;
        background-size: cover;
        padding: 12px;
        width: 100%;
        margin: 0;
        border-radius: 6px;
    }
    aside{
        float: left;
        background-color: red;
        opacity: 0.7;
        border-radius: 3px;
        font-size: 20px;
        display: inline-block;
        width: 200px;
    }
    aside ul{
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    aside ul li a{
        text-decoration: none;
        padding: 14px 25px;
        display:block;
        color: black;
    }
    aside ul a:hover{
        background-color: grey;
        border-radius: 3px;
     opacity: 0.9;
    }
    nav{
        background-color: grey;
        overflow: hidden;
        opacity: 0.9;
    }
    nav ul{
        list-style-type: none;
        padding 0;
        margin: 0;
    }
    nav ul li{
        float: left;
    }
    nav ul li a{
        text-decoration: none;
        color: ghostwhite;
        padding: 12px 25px;
        display: inline-block;
    }
    nav ul li a:hover{
        background-color: black;
        border-radius: 3px;
        opacity: 0.7;
    }
    section{
        margin-left: 200px;
        border-left: 1px solid grey;
    }
    .details{
        background-image:url("img/android-wallpaper-city-dark-248159.jpg");
        border-radius: 10px;
        background-size: cover;
        padding: 32px;
        color: ghostwhite;
        margin: 20px;
        width: 800px;
        float: right;
    }
    summary{
        outline: none;
    }
    textarea{
        padding: 12px;
        border-radius: 20px;
    }.bb{
        padding:15px;
        color:black;
        border:none;
        outline:none;
        margin:0px;
    }
    .b1{
        border-radius:5px;
        border:none;
        padding:10px;
        background-color:dodgerblue;
    }
</style>
<body>
<header>
    <h1>Social HUB</h1>
    <p>Connecting people</p>
</header>
<nav>
    <ul>
        <li>
            <a href="#" class="active">Home</a>
        </li>
        <li>
            <a href="./desc.php">Add Description</a>
        </li>
        <li>
            <a href="passwordchange.php">Change Password</a>
        </li>
        <li>
            <a href="logout.php">Logout</a>
        </li>
        <form action="search.php" mode="POST">
        <input type="text" name="Search" placeholder="Search" class="bb" >
        <input type="Submit" name="submit" value="Search" class="b1">
    </ul>
</nav>
<aside>

               
</aside>
<div id="Home">
<h1>Hi <?php echo $_SESSION['Username']; ?></h1>
      </div>
<div class="details">
    <table>
        <td>
        <form action="./post.php" mode="POST">
            <textarea rows="5" cols="100" name="story" placeholder="Today's Story"></textarea>
            <input type="submit" name="s" value="Post">
            </form>
        </td>
        </table>
</div>
<div>

</div>

