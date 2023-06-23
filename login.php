<?php
session_start();
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
  <!--<div class="hero_area">-->
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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">
                    Home <span class="sr-only">(current)</span></a>
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
                <li class="nav-item active">
                  <a class="nav-link" href="login.php"> Login</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>


  <style>
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }

    input[type=text],
    input[type=password],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button[type=submit] {
      background-color: rgb(0, 0, 125);
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type=submit] {
      background-color: rgb(0, 0, 125);
    }

    /*.container1 {
      padding: 16px;
      background-color: #f1f1f1;
      width: 50%;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }*/
    .container1 {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 20px;
      background-color: whitesmoke;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      /* Adds a box-shadow */
      width: 60%;
      /* Sets the width of the container to 80% of the parent element */
      height: 60%;
      /* Sets the height of the container to 400px */
      border-radius: 20px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    a {
      text-decoration: none;
      color: #4CAF50;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: left;
    }

    .cancelbtn:hover {
      background-color: #e60000;
    }

    /* Change styles for cancel button and signup link on extra small screens */
    @media screen and (max-width: 300px) {

      .cancelbtn,
      .signupbtn {
        width: 100%;
      }
    }
  </style>

  <?php
  if (isset($_POST['s1'])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $login_typ = $_POST["login-types"];
    if ($login_typ == "admin") {
      $login_typ = 0;
    }
    if ($login_typ == "user") {
      $login_typ = 1;
    }
    if ($login_typ == "ngo") {
      $login_typ = 2;
    }

    verify_password($user, $pass, $login_typ);
  }

  function verify_password($user, $pass, $login_typ)
  {
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "dbms_project";
    $mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
    if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = "SELECT password FROM credentials WHERE username = '$user' and type = '$login_typ'"; //'$user'
    $query = mysqli_query($mysqli, $sql);
    $rows = mysqli_num_rows($query);

    //verifying password 
    if ($rows >= 1) {
      $row = mysqli_fetch_assoc($query);
      $dbstored_pass = $row['password'];

      $isValid = password_verify($pass, $dbstored_pass); //pass=plaintextpsw

      if ($isValid) {
        $_SESSION['session_user'] = $user;
        $_SESSION['logged in'] = true;
        //define('ACCESS',true);
        //header("location: profile.php"); //check changed profile.php to validate
        if ($login_typ == 1) {
  ?>
          <script>
            window.location = "profile.php";
          </script>
        <?php } ?>
        <?php
        if ($login_typ == 2) {
        ?>
          <script>
            window.location = "ngo_profile.php";
          </script>
        <?php } ?>
        <?php
        if ($login_typ == 0) {
        ?>
          <script>
            window.location = "admin_profile.php";
          </script>
        <?php } ?>

  <?php

      } else {
        echo '<p1 style="color:red">Password is invalid</p1></form>';
      }
    } else {
      echo '<p1 style="color:red">Username or Password is invalid</p1></form>';
    }
    $mysqli->close();
  }
  ?>

    <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

      <div class="container1">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="user" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
        <label for="login">Choose your type of login:</label>
        <select name="login-types" id="login-types">
          <option value="admin">Admin</option>
          <option value="ngo">NGO</option>
          <option value="user">Patient</option>
          <!--<option value="donator">Donator</option>-->
        </select>
        <button type="submit" name="s1">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <p>Don't have an account?</p>
        <a href="signUp.php" style ="color: rgb(0, 0, 125);">Sign Up</a>
      </div>
    </form>
    <br><br><br>
  
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
</body>

</html>