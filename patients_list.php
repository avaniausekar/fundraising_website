<?php
session_start();
//session_start();
  $dbserver = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "dbms_project";
  $mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

  $sql = "SELECT * from donatee_info order by uid desc";
  $res = mysqli_query($mysqli, $sql);
  $cat_res = mysqli_query($mysqli, "select * from donatee_info where status = 1");

  //ngo
  $sql2 = "SELECT * from ngo_inf order by uid desc";
  $res2 = mysqli_query($mysqli,$sql2);
  $cat_res2 =  mysqli_query($mysqli, "select * from ngo_inf where status = 1");

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
 <!-- <div class="hero_area">-->
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

          <div class="collapse navbar-collapse" id="navbarSupportedContent" style = "margin-left:305px;">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="program.html"> Our Work </a>
                </li>
                <li class="nav-item active">
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
    <h2>We value your Donation</h2><br><br><br>
  <!--</div>-->
  <style>
    .container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      width: 80%;
    }
    .container1 {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      width: 80%;
      height: 50%;
      border: black;
      border-style: double;
    }

    .column {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 50%;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .field{
      border: black;
      border-style: double;
    }
    .column-heading {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .textbox {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .button {
      /*background-color: #4CAF50;*/
      background-color: rgb(0, 0, 125);
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin-bottom: 10px;
    }

    .btn1 {
      display: block;
      /*padding: 10px 20px;*/
      background-color: #f3101b;
      color: #fff;
      border: none;
      height: fit-content;
      width: fit-content;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin-right: 10px;

    }

    .checkbox-container {
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-bottom: 10px;
    }

    .image {
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    .checkbox-label {
      margin-left: 5px;
      font-size: 16px;
    }

    .checkbox {
      margin-right: 5px;
      cursor: pointer;
    }
  </style>

  <!-- end header section -->
  <div class="container">
      <div class="column">
        <h2 class="column-heading">Patient</h2>
        <?php

        $i = 1;
        while ($row = mysqli_fetch_assoc($cat_res)) {
          $id = $row['uid']; ?>
          
        <div class="container1">
          <table>
          <tr>
              <td><img src="/uploads/<?php echo ($row['image']) ?> " style="width:300px;height: 300px" /></td>
            </tr>
            <tr>
              <th>Name</th>
              <td><?php echo "{$row['fname']} {$row['sname']}" ?></td>
            </tr>
            <tr>
              <th>Cause</th>
              <td><?php echo $row['cause'] ?></td>
            </tr>
            <tr>
              <th>Expected(INR)</th>
              <td><?php echo "{$row['expamount']}" ?></td>
            </tr>
            <tr>
              <th>Raised(INR)</th>
              <td><?php echo "{$row['raised_amt']}" ?></td>
            </tr>
            </table><br>
          
            </div>
            <br><br>
        <div>
          <form action="patient_info.php" method="post">
            <input type="hidden" id="uid" name="uid" value=<?php echo ($row['uid']) ?>>
            <input type="submit" name="s1" value="View & Donate">
          </form>
          </div>
        
          
          <br>
        <?php } ?>

      </div>

      <!--ngo-->
      <div class="column">
        <h2 class="column-heading">NGO</h2>
        <?php

        $i = 1;
        while ($row = mysqli_fetch_assoc($cat_res2)) {
          $id = $row['uid']; ?>
        <div class="container1">
          <table>
          <tr>
              <td><img src="/uploads/<?php echo ($row['image']) ?> " style="width:300px;height: 300px" /></td>
            </tr>

            <tr>
              <th>Name</th>
              <td><?php echo "{$row['name']}" ?></td>
            </tr>
            <tr>
              <th>Cause</th>
              <td><?php echo $row['cause'] ?></td>
            </tr>
        </table><br>
        </div>
        <br><br>
        <div>
          <form action="ngo_info.php" method="post">
            <input type="hidden" id="uid" name="uid" value=<?php echo ($row['uid']) ?>><br><br>
            <input type="submit" name="s1" value="View & Donate">
          </form>
          </div>
          <br>
        <?php } ?>
      </div>
  </div>
</body><br><br>
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

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 All Rights Reserved By
      <a href="https://html.design/">Crowdfunding - AISHI</a>
    </p>
  </section>
  <!-- footer section -->

    