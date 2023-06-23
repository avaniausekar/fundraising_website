<?php
      $dbserver = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $dbname = "dbms_project";
      $mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

      $sql = "SELECT name from donator order by name asc LIMIT 3";
      $res = mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>AISHI</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <!--<a class="navbar-brand" >-->
          <img src="/images/hand-care-logo-vector-removebg-preview.png" height="100px" width="150px" alt="" />
          <!--</a>-->
          <h1>AISHI</h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">
                    Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="program.html"> Our Work </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="patients_list.php"> Donate</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php"> Login</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!--
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>-->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <!--
                  <div class="detail-box">
                    <h1>
                      EVERY CENT <br />
                      <span>
                        COUNTS
                      </span>
                    </h1>
                    <p>
                      xysbajdugajdn bajdanb djada danjhnadvaudjb  jhgdk,jb  ajdugau  majbdau ajdgajd am
                      andbjaudjab  audga jadgajdb  mjadhiab kjhao
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>-->
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Crowdfunding now in India<br />
                      <span>
                        For Your Kids
                      </span>
                    </h1>
                    <p>
                      Current Work going on
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      A Perfect Learning Center <br />
                      <span>
                        For Your Kids
                      </span>
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                      The point of using Lorem Ipsum is that it has a more-or-less
                      normal distribution of letters, as
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      A Perfect Learning Center <br />
                      <span>
                        For Your Kids
                      </span>
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                      The point of using Lorem Ipsum is that it has a more-or-less
                      normal distribution of letters, as
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      A Perfect Learning Center <br />
                      <span>
                        For Your Kids
                      </span>
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                      The point of using Lorem Ipsum is that it has a more-or-less
                      normal distribution of letters, as
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->
  <section class="offer_section hero_next_section-margin layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Crowdfunding In India
        </h2>
        
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="https://www.cancersupportcommunity.org/sites/default/files/styles/large/public/d7/image/bigstock-hope-for-future-3649887-brain_cancer.jpg.webp?itok=EZimNLr_"  height="150px" width="150px" >

            </div>
            <div class="detail-box">
              <h6>
                Miss Rucha Holkar
              </h6>
              <p>
              I was diagnosed with brain tumer in 2018. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="https://media.istockphoto.com/id/1213990451/photo/image-of-young-indian-man-lying-on-hospital-bed-with-iv-drip-on-his-hand-looking-ill-sick.jpg?s=612x612&w=0&k=20&c=th1KQopJuLXGkcm9MPh8vq2UcMugikBuhzZk6j2XJQ0=" height="150px" width="150px" >

            </div>
            <div class="detail-box">
              <h6>
                Mr. Dhanraj koli
              </h6>
              <p>
                Living with blood cancer is a challenging and often expensive journey. As a blood cancer patient myself, I know firsthand the physical, emotional, and financial toll this illness can take on a person and their family. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="https://media-cldnry.s-nbcnews.com/image/upload/rockcms/2023-02/230206-turkey-earthquake-mn-1305-b104ab.jpg"  height="150px" width="150px">
            </div>
            <div class="detail-box">
              <h6>
                Earthquake in Turkey
              </h6>
              <p>
                The recent earthquake in Turkey has caused immense devastation and loss of life. The earthquake, which struck on October 30, 2020, has claimed the lives of over 100 people and injured many more. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="https://images.hindustantimes.com/img/2021/10/19/1600x900/824f60d2-3104-11ec-b4d0-e328c23f8ca7_1634665672336.jpg" height="150px" width="150px">
              </div>
          
        
            <div class="detail-box">
              <h6>
                Uthharakhand Floods
              </h6>
              <p>
                The Uttarakhand floods of 2021 have caused widespread devastation and loss of life in the region. Triggered by heavy rainfall, the floods have led to massive landslides and flash floods, causing rivers to overflow </p>
            </div>
          </div>
        </div>
        

        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="https://cfstatic.give.do/e7d3600d-bf6e-4fbb-971b-75f44cb19525.jpg" height="150px" width="150px">
            </div>
            <div class="detail-box">
              <h6>
                NGO- Sewa
              </h6>
              <p>
                For senior citizens.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="https://aniportalimages.s3.amazonaws.com/media/details/jk2.jpg" height="150px" width="150px">
            </div>
            <div class="detail-box">
              <h6>
                NGO - army Women
              </h6>
              <p>
               Supporting widows and family of martyed army officers.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    
    var slideIndex = 2;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active1", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active1";
  
}
  </script>
  <style>
    /* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
  text-align: center;
  padding: 20px;
  background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active1 .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
  </style>
 <!-- Slideshow container -->

 <div class="heading_container">
        <h2 style = "margin-left:180px">
          Our Recent Donators
        </h2>
        
      </div>
<div class="slideshow-container">

<!-- Full-width slides/quotes -->
<?php while($row = mysqli_fetch_assoc($res)){?>
<div class="mySlides">
  <q>We value your donation.Thank-You</q>
  <p class="author">Donator <?php echo $row['name']?></p>
</div>
<?php }?>

<!-- Next/prev buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>


  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_form">

        <div class="row">
          <div class="offset-lg-3 col-lg-3">
            <h5 class="form_heading">
              Newsletter
            </h5>
          </div>
          <div class="col-md-6">
            <form action="#">
              <input type="text" placeholder="Enter Your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <div>
              <a href="">
                <img src="/images/hand-care-logo-vector-removebg-preview.png" height="100px" width="150px" alt="" />
               <span>
                  AISHI
                </span>
              </a>
            </div>
            <p>
              From some of yours to some of us. Help us to save lives. Help us to give lives. Help us to nurture lives.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links ">
            <h5>
              Contact Us
            </h5>
            <p class="pr-0 pr-md-4 pr-lg-5">
             Cummins College Of Engineering Women,Karvenagar
             Pune-411052
             8624040389
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              INFORMATION
            </h5>
            <p class="pr-0 pr-md-4 pr-md-5">
              The Only Fundraising Platform Now in India. For Patients, NGO and Global Issues.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="pl-0 pl-lg-5 pl-md-4">
            <h5>
              MY ACCOUNT

            </h5>
            <p>
              aishi.fundraising.@gmail.com
            </p>

          </div>
        </div>
      </div>
    </div>
    
  </section>

  
  
</body>

  
  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 All Rights Reserved By
      <a href="https://html.design/">Crowdfunding - AISHI</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  
  <!-- end google map js -->

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>


</html>