
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="./css/login.css">

      <!-- Let browser know website is optimized for mobile -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Log In</title>
    </head>

    <body>
        <div class="cont">
            <div class="login-box">
                <form action="index.php" method="post">
                    <h3 style="padding-bottom: 10px;">Log In</h3>
                    <input style="width: 65%;" type="text" name="email" placeholder="Email">
                    <input style="width: 65%;" type="password" id="pword" name="password" placeholder="Password">
                    <?php
                      echo '<p>'. $loginerr .'</p>';
                    ?>
                    <button id="loginButton"  type="submit" class="waves-effect waves-light btn modal-trigger" href="#modal1">Log In</button>
                    <!-- <div class="login-button" type="submit">Log In</div> -->
                </form>
                <p id="or">OR</p>
                <!-- <div class="signup-button" href="">Sign Up </div> -->
                <a id="signup-button" class="waves-effect waves-light btn modal-trigger" href="signup-page.php">Sign Up</a>
            </div>
        </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
  <?php

    $loginerr = "";

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
            header("location:home.php");
            echo "logged in";
        }
        else {
            header("location:index.php");
            $loginerr = "Wrong Email or Password";
        }
    }
}
?>
  