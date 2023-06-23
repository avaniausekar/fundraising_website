<?php 
session_start();
if (!isset($_SESSION['session_user'])) {
	die('Access Denied');
}
if (isset($_SESSION['session_user'])) {
	//session_start();
	$user = $_SESSION['session_user'];
	$dbserver = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "dbms_project";
		$mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
}
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
  <meta name="author" content=""/>

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
          
            <img src="/images/hand-care-logo-vector-removebg-preview.png" style="width:100px; height:100px;" alt="" >
            <h1>
              AISHI
            </h1>
             
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="profile.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="patient_reg.php">Start your Fundraiser</a>
                </li>
              
                <li class="nav-item">
                <button class="btn1"><a class="nav-link" href="logout.php"> Logout</a></button>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!--<h3>
      <a href = "#">Profile:</a>
</h3><br><br>

    <h3>
    <a href = "patient_reg.php">Start a Fundraiser:</a>
    </h3>-->
    <style>

   
            .container1 {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: center;
                margin: 0 auto;
                max-width: 800px;
                padding: 20px;
            }
    
            .column {
                flex-basis: 45%;
                margin-bottom: 20px;
            }
    
            .btn {
                display: block;
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                margin-right: 10px;
            }
            .btn1{
              display: block;
                /*padding: 10px 20px;*/
                background-color: #f3101b;
                color: #fff;
                border: none;
                height:fit-content;
                width: fit-content;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                margin-right: 10px;

            }
    
            .btn:hover {
                background-color: #0069d9;
            }
            .btn1:hover {
                
              background-color: #c20f0f;

            }
    
            label {
                display: block;
                margin-bottom: 5px;
                font-size: 16px;
                font-weight: bold;
            }
    
            input[type=text],
            input[type=email],
            input[type=number],
            textarea {
                display: block;
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 10px;
                font-size: 16px;
            }
            
            .image-box {
                flex-basis: 100%;
                margin-right: 20px;
            }
            
            .image-box img {
                max-width: 200px;
                height: auto;
                display: block;
                margin: 0;
            }
        </style>
    
    <body>
    <?php
    echo "Welcome user " .$user ;
    ?>
        <div class="container1">
            
            <div class="column">
                <div class="image-box"><?php
                  $sql = "SELECT fname FROM donatee_info WHERE  uid = (SELECT id from credentials WHERE username = '$user')"; //'$user'
                  $query = mysqli_query($mysqli, $sql);
                  $rows = mysqli_num_rows($query);
                    if($rows > 0){
                      $sql1 = "SELECT image FROM donatee_info WHERE uid =(SELECT id from credentials where username = '$user')";
							            if ($query1 = mysqli_query($mysqli, $sql1)) {
								          $row = mysqli_fetch_assoc($query1);
                      ?>
                    <img src="/uploads/<?php echo ($row['image']);}?> " alt="Placeholder Image">
                    <?php 
                    }
                      else{?>
                        <img src="https://via.placeholder.com/150" alt="Placeholder Image">
                      <?php }
                    ?>
                <br>
                <button class="btn">My Profile</button>
                </div>
            </div>

            <div class="column">
                <h2>Uploaded Information: </h2>
                <?php 
                  //$var = "SELECT id from credentials WHERE username = '$user'";
                  $sql = "SELECT fname FROM donatee_info WHERE  uid = (SELECT id from credentials WHERE username = '$user')"; //'$user'
                  $query = mysqli_query($mysqli, $sql);
                  $rows = mysqli_num_rows($query);
                    if($rows == 0){
                        echo "You have not yet regestered for a fundraiser";
                    }
                    else{ ?>

                <label for="name">Name: <?php 
                          $sql = "SELECT * FROM donatee_info WHERE uid =(SELECT id from credentials where username = '$user')";
							            if ($query = mysqli_query($mysqli, $sql)) {
								          $row = mysqli_fetch_assoc($query);
								          echo "{$row['fname']}  {$row['sname']}";
							?></label>
                
    
                <label for="cause">Cause: <?php echo "{$row['cause']}";?></label>
                
    
                <label for="story">Story: <?php echo "{$row['story']}";?></label>
    
                <label for="expected_amount">Expected Amount: <?php echo "{$row['expamount']}";?></label>
                
    
                <label for="raised_amount">Raised Amount: <?php echo "{$row['raised_amt']}";?></label>
    
                <label for="view_documents">View Documents: <?php // echo "{$row['verification_doc']}";?></label>
                <img src="/uploads/<?php echo ($row['verification_doc']); }?> " style="width:200px;height: 200px"/>
                 
                <label for="status">Status: <?php 
                            if($row['status'] == 0){
                              echo"Application under processing";
                            }
                            if($row['status'] == 1){
                              echo"Application accepted";
                            }
                            if($row['status'] == 2){
                              echo"Application rejected";
                            }
                              ?></label>
                <?php
                    }
                ?>
                
            </div>
        </div>
    </body>
    <br><br>
    <section class="container-fluid footer_section">
    <p>
      &copy; 2023 All Rights Reserved By
      <a href="https://html.design/">Crowdfunding - AISHI</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        }
      });

      var image = "images/maps-and-flags.png";
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
    </html>
    
