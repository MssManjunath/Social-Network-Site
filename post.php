 <?php
 session_start();
include('./inc/dblink.php');
$content =$_POST['post'];
$username=$_SESSION['Username'];

    if($content==''){
        $insert="INSERT into story (username,body,time_at,likes) VALUE ('$username','$content',NOW(),'')";
        $run=mysqli_query($conn,$insert);
        if($run){
            echo"<script>alert('Your Post has been Updated Succesfully.')</script>";
        
    }
    else{
        echo"<h2>Please enter your Post</h2>";
        }
    }
    ?>