<?php
  include("signup.php")
?>
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
      <title>Sign Up</title>
    </head>

    <body>
        <div class="cont">
            <div class="login-box">
                <form action="signup.php" method="post">
                    <h3 style="padding-bottom: 10px;">Sign Up</h3>
                    <?php
                      echo '<p>'. $signuperr .'</p>';
                    ?>
                    <input style="width: 65%;" type="text" name="first_name" placeholder="First Name">
                    <input style="width: 65%;" type="text" name="last_name" placeholder="Last Name">
                    <input style="width: 65%;" type="text" name="email" placeholder="Email">
                    <input style="width: 65%;" type="password" id="pword" name="password" placeholder="Password">
                    <p>Already a member? <a href="index.php"><b>Log In</b></a></p>
                    <button type="submit" id="signupButton" class="waves-effect waves-light btn modal-trigger">Sign Up</button>
                </form>
              
                
            </div>
        </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>