<?php
    include('connect.inc.php');

    $name = $_POST['fname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['password2'];

    if ($pwd == $cpwd)
    {

    $sql = "INSERT INTO login(fname,username,email,pwd) VALUES ('$name','$username',  '$email', '$pwd');";
    $sr=mysqli_query($conn,$sql);
    $se ="INSERT INTO pwd(username,oldpwd,newpwd) VALUES ('$username','','$pwd')";
    $ss=mysqli_query($conn,$se);
    if($sr&&$ss){

    header('Location:../index.php');
    }
}
    else{
        echo "failure";
       
    }
?>
