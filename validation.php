<?php

    session_start();


    $con = mysqli_connect('localhost', 'root', 'root');

    mysqli_select_db($con, 'oceanwise');

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $s = " select * from users where email = '$email' && password = '$password'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        
    }else{
      
    }
?>