<?php 
$servername="localhost";
$username="root";
$password="";
$db="sm";
$conn= new mysqli($servername,$username, $password,$db);
if(!($conn)){
    die('erreur :');
}
$query = "select * from news where location='Tunis'";
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Property Listing by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/news.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <img src="assets/images/wsinthechat.png" style="height: auto; width:15%; position: relative; right: 100px; bottom: 30px;">
                <!--<a href="index.html" class="logo">
                    <h1>Villa</h1>-->
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                  <li><a href="index.html" >Home</a></li>
                  <li><a href="news.html" class="active">News&Alerts</a></li>
                  <li><a href="courses.html">Courses</a></li>
                  <li><a href="Donations.html">Donations</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="sign-up.html">ㅤㅤLogin/Signupㅤ</a></li>
              </ul>   
                <a class='menu-trigger'>
                    <span>News&Alerts</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
            </div>
        </div>
    </div>
  </header>
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>News&Alerts</h3>
        </div>
      </div>
    </div>
  </div>


  <div class="section properties newscontainer container">
    
    <div class=" news">
        <h1 class="titre">News</h1>
        <div class="news_item">
            <a href="https://www.cap-lmu.de/download/2020/CAPerspectives-Tunisia-2020-01.pdf?m=1588772368&#:~:text=Several%20risks%20of%20flooding%20have,reality%20for%20humans%20and%20society."><img src="assets/images/south-africa-floods.jpg" alt="">
            <h3 class="title">South Africa floods kill more than 300 people</h3>
            <p class="caption">
                Heavy rains and flooding battered the eastern coast of South Africa on Wednesday, killing at least 306 people, damaging roads and destroying homes.</p>
            </a>
        </div>
        <div class="news_item">
            <a href="https://en.wikipedia.org/wiki/2004_Indian_Ocean_earthquake_and_tsunami"><img src="assets/images/Nagapattinam-tsunami-2004.webp" alt="">
            <h3 class="title">Indian Ocean tsunami </h3>
            <p class="caption">Tied for 10th place is a catastrophic magnitude 9.1 earthquake that struck undersea off the west coast of Sumatra, Indonesia, on Dec. 26, 2004. The quake created a massive tsunami that killed approximately 230,000, and displaced nearly 2 million people in 14 South Asian and East African countries.
                 </p>
                </a>
        </div>
        <div class="news_item">
            <a href="https://www.britannica.com/event/2010-Haiti-earthquake"><img src="assets/images/Haiti Earthquake.avif" alt="">
            <h3 class="title"> THE HAITI EARTHQUAKE</h3>
            <p class="caption">The catastrophic magnitude 7.0 earthquake that struck Haiti just northwest of Port-au-Prince on Jan. 12, 2010, ranks as one of the three deadliest quakes of all time.</p>
            </a>
        </div>
        <div class="news_item">
            <a href="https://en.wikipedia.org/wiki/2018_California_wildfires"><img src="assets/images/california.jpg" alt="">
            <h3 class="title">California wildfires</h3>
            <p class="caption">
                The 2018 wildfire season was the deadliest and most destructive wildfire season in California history. It was also the largest on record at the time, now third after the 2020 and 2021 California wildfire seasons.
            </p>
            </a>
        </div>
      
      
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="alert">
        <h1 class="titre"><span><img src="assets/images/alert.png" alt=""></span>Alert</h1>
        <div class="alert_item">
            <?php
            while($row = mysqli_fetch_assoc($result)){

            ?>
            <div>
              <?php 
                echo("<b>".$row['title']."</b>"."<br>");
                echo($row['discription']."<br>"."<br>"."<a href='#'>Explore</a>");
              ?>
            </div>
            <?php
            }
            ?>

        </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>