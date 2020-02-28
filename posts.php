<?php
     session_start();
     header("location:home.php");
     
 
     $con = mysqli_connect('localhost', 'root', 'root');
 
     mysqli_select_db($con, 'oceanwise');

   
     if($_SERVER["REQUEST_METHOD"] == "POST"){
 
     $img_url = $_POST['image-url'];
     $message = $_POST['message'];
     $name_id = "Jacky";
    
 
     $query = " insert into posts(name_id, img_url, message) values ('$name_id','$img_url','$message')";
        mysqli_query($con, $query);
        echo "Sign Up complete";
     }
?>