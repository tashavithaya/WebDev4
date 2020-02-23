<?php

    session_start();
    header("location:index.php");

    $con = mysqli_connect('localhost', 'root', 'root');

    mysqli_select_db($con, 'oceanwise');

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $s = " select * from users where email = '$email'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Email Already Taken";
    }else{
        $reg = " insert into users(First_Name, Last_name, email, password) values ('$fname','$lname','$email','$password')";
        mysqli_query($con, $reg);
        echo "Sign Up complete";
    }
?>