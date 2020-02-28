<?php

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $con = mysqli_connect("localhost", "root", "root");
        mysqli_select_db($con, "oceanwise");

        $email = $_POST['email'];
        $password = $_POST['password'];

        $password = strip_tags(mysqli_real_escape_string($con,trim($password)));

        $query = "SELECT * FROM users WHERE email = '".$email."'";
        $tbl = mysqli_query($con, $query);

        if(mysqli_num_rows($tbl)>0){
            $row = mysqli_fetch_array($tbl);
            $password_hash = $row['password'];
            if(password_verify($password,$password_hash)){
                $_SESSION['email'] = $email;
                echo "this is an email" . $email;
                header("location:home.php");
                echo "logged in";
            }
            else {
                header("location:index.php");
                echo "wrong credentials";
            }
        }
    }

?>