<?php 
  session_start();
  $con = mysqli_connect('localhost', 'root', 'root');
  mysqli_select_db($con, 'oceanwise'); 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/materialize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">
 

  <title>OceanWise</title>
</head>
<body>

  <div class="page-layout">
    <header class="page-header">
      <div class="header-content content">
        <h1 class="page-header__heading">OceanWise</h1>
        <?php
          if(isset($_SESSION['email'])){
            echo '<h2 id="heading_username">'.$_SESSION['email'].'</h2>';
          }
        ?> 
      </div> 
    </header>

    <main class="main-page">
      <div id="posts-container" class="content posts-container">
        <?php
          $res = mysqli_query($con, "SELECT * FROM posts");
          while($row= mysqli_fetch_array($res))
          {
        ?>
         <div class="row">
              <div class="col s12 m7">
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo $row['img_url']?>">
                  </div>
                  <div class="card-content">
                    <b>Posted by</b> <br>
                    <?php echo '<p>'.$_SESSION['email'].'</p>'; ?>
                    <p><?php echo $row['message']?></p>
                  </div>
                </div>
              </div>
            </div>    
        <?php

        }

        ?>    
      </div>
    </main>

    <footer class="page-footer">
        <div class="footer-content content">
          <form action="posts.php" method="post" id="post-form" class="post-form">
              <input id="post-form-image_url" class="post-form__input" type="text" name="image-url" placeholder="Image URL">
              <input id="post-form-comment" class="post-form__input" type="text" name="message" placeholder="Message">
              <button type="submit" class="post-form__button btn-flat">Post</button>
          </form>
        </div> 
    </footer>  
  </div>

</body>
</html>