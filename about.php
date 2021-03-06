  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Ocean Wise</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <nav class="black" role="navigation">
      <div class="nav-wrapper container">
        <img src="https://ocean.org/wp-content/themes/sage/dist/images/logo-complete_2ca91b48.svg" id="logo-container" class="brand-logo left" style="width: 120px; height: 54px;">
        <ul class="right hide-on-med-and-down">
          <li><a href="./home.php">News</a></li>
          <li><a href="./about.php">About us</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li> <?php
            if(isset($_SESSION['email'])){
              echo '<h2 id="heading_username">'.$_SESSION['email'].'</h2>';
            }
          ?> </li>
          <li><a href="./home.php">News</a></li>
          <li><a href="./about.php">About us</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">Menu</i></a>
      </div>
    </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">Protect Our Oceans.</h1>
        <div class="row center">
          <h5 class="header col s12 white-text">Support critical research, direct action and education.</h5>
        </div>
        <div class="row center">
          <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Donate Now</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax" id="img1"><img src="imgs/background1.jpeg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="center">
            <img src="https://ocean.org/wp-content/uploads/icon-aquarium.svg">
            </div>
            <h5 class="center">Vancouver Aquarium</h5>

            <p class="light">An animal sanctuary in the heart of Stanley Park, the Vancouver Aquarium is home to thousands of incredible ocean species and amazing aquatic life. It’s also Ocean Wise headquarters.</p>
          
        </div>

        <div class="col s12 m4">
          <div class="center">
              <img src="https://ocean.org/wp-content/uploads/icon-cleanup.svg">
            </div>
            <h5 class="center">Shoreline Cleanup</h5>

            <p class="light">The Great Canadian Shoreline Cleanup is a national conservation initiative that provides the opportunity for people to take action in their communities wherever water meets land, one bit of trash at a time.</p>
          
        </div>

        <div class="col s12 m4">
          <div class="center">
            <img src="https://ocean.org/wp-content/uploads/icon-oceanwise.svg">
        </div>
            <h5 class="center">Ocean Wise Seafood</h5>

            <p class="light">Overfishing is one of the greatest threats our oceans are facing today. The Ocean Wise sustainable seafood program helps to ensure that ocean life will be abundant for generations to come.</p>
          
        </div>
      </div>

        <div class="row">
            <div class="col s12 m4">
                <div class="center">
                <img src="https://ocean.org/wp-content/uploads/icon_mmr.svg" style="width: 80px; height: 54px;">
            </div>
                <h5 class="center">Marine Mammal Rescue</h5>

                <p class="light">A hospital and care facility for sick, injured or orphaned marine mammals. Each year, our rescue program saves over 100 marine mammals and rehabilitates them for release back into the wild.</p>
                
            </div>

            <div class="col s12 m4">
                <div class="center">
                <img src="https://ocean.org/wp-content/uploads/PlasticWise-2.svg" style="width: 80px; height: 54px;">
            </div>
                <h5 class="center">Plastic Wise</h5>

                <p class="light">Ocean Wise is tackling the global crisis of plastic waste in our ocean. We’re carrying out groundbreaking science to understand the problem and seeking bold solutions to address plastic pollution.</p>
                
            </div>

            <div class="col s12 m4">
                <div class="center">
                <img src="https://ocean.org/wp-content/uploads/icon_arcticconnections.svg" style="width: 80px; height: 54px;">
            </div>
                <h5 class="center">Arctic Connections</h5>

                <p class="light">Bridging southern and northern perspectives, knowledge and ideas. Our goal is to create greater awareness and understanding of important issues that affect both northern and southern Canadians.</p>
                
            </div>

        </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center white-text">
          <h5 class="header col s12 light">Our vision is a world in which oceans are healthy and flourishing.
            Our mission is to inspire the global community to become Ocean Wise by increasing its understanding, wonder and appreciation for our oceans.</h5>
        </div>
      </div>
    </div>
    <div class="parallax" id="img2"><img src="imgs/background2.jpeg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h4>Ocean Wise Senior Leadership Team</h4>
          <p class="left-align col s12 l6">Lasse Gustavsson<br/>
            President & Chief Executive Officer
            <br/><br/>
            Clint Wright<br/>
            Chief Operating Officer & Executive Vice President, Aquariums
            <br/><br/>
            Dr. Carlos Drews<br/>
            Executive Vice President, Conservation
            <br/><br/>
            James Bartram<br/>
            Vice President, Education & Youth </p>

            <p class="left-align col s12 l6">Dr. Peter Ross<br/>
                Vice President, Research & Executive Director, Coastal Ocean Research Institute
              <br/><br/>
              Jeremy Douglas<br/>
              Vice President, Development & External Relations
              <br/><br/>
              Dr. Carlos Drews<br/>
              Executive Vice President, Conservation
              <br/><br/>
              Edwina Doran<br/>
              Vice President, Human Resources</p>
          </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row">
            <div class="col s12 white-text">
              <h4>Work With Us</h4>
              <p class="light">Visit our online career centre to view current employment opportunities and submit your resume online. If you have already applied to a position, log on to view your profile.

                Ocean Wise® has been named one of Canada’s Greenest Employers for 2018 and recognized for our commitment to sustainability.</p>
              </div>
          </div>
      </div>
    </div>
    <div class="parallax" id="img3"><img src="imgs/background3.jpeg" alt="Unsplashed background img 3" style="filter: brightness(50%);"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h4 class="white-text">Contact Us</h4>
          <h5 class="grey-text text-lighten-4">General Inquiries</h5>
            <p class="white-text">Email: <a class="white-text" href="mailto:contact@ocean.org">contact@ocean.org</a></p>

            <h5 class="grey-text text-lighten-4">Mailing Address</h5>
            <p class="white-text">Ocean Wise<br/>
                PO Box 3232<br/>
                Vancouver, British Columbia<br/>
                Canada V6B 3X8</p> 
        </div>
        <div class="col l6 s12">
          <h4 class="white-text">Courier Address</h4>
          <p class="white-text">Ocean Wise at Vancouver Aquarium<br/>
            845 Avison Way<br/>
            Vancouver, British Columbia<br/>
            Canada V6G 3E2</p> 
 
                <h5 class="grey-text text-lighten-4">Media Inquiries</h5>
                  <p class="white-text">Email: <a class="white-text" href="mailto:publicrelations@ocean.org">publicrelations@ocean.org</a></p>
                  <p class="white-text">Media Centre: Press releases, press kits, images</p>
        </div>

      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by Jacky Tam, Emily Kwok-choon, Tasha Vithaya with<a class="brown-text text-lighten-3" href="http://materializecss.com"> Materialize</a>
      </div>
    </div>
  </footer>

  <script src="js/script.js"></script>

  </body>
</html>