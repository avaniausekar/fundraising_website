<?php
session_start();
if (!isset($_SESSION['session_user'])) {
        die('Access Denied');
      }
      if (isset($_SESSION['session_user'])) {
//session_start();
  $dbserver = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "dbms_project";
  $mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

  $sql = "SELECT * from donatee_info order by uid desc";
  $res = mysqli_query($mysqli, $sql);
  //$cat_res = mysqli_query($mysqli, "select * from donatee_info where status = 1");


  //ngo
 // $sql2 = "SELECT * from ngo_inf order by uid desc";
 // $res2 = mysqli_query($mysqli,$sql2);
 // $cat_res2 =  mysqli_query($mysqli, "select * from ngo_inf where status = 1");
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
  <meta name="author" content="" />

  <title>Admin</title>

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

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand">
            <img src="images/hand-care-logo-vector-removebg-preview.png"height="100px" width="150px"  alt="" />
            </a><h1>AISHI</h1>
          
          
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="admin_profile.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="patient_docs.php"> Patient Docs </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ngo_docs.php"> Ngo Docs </a>
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
    <!-- end header section -->

  </div>

  <style>
         .container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      width: 80%;
    }

    .column {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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
     body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      .container {
        display: flex;
        flex-wrap: wrap;
      }
      .image {
        width: 50%;
        height: auto;
        object-fit: cover;
        float: left;
      }
      /*.content {
        width: 50%;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        text-align: left;
        float: right;
      }*/
      .content{
      display: flex;
      flex-direction: column;
      
      width: 40%;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      h1 {
        font-size: 48px;
        margin: 0;
        padding: 0;
        line-height: 1.2;
      }
      h2 {
        font-size: 36px;
        margin: 20px 0 0 0;
        padding: 0;
        line-height: 1.2;
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
      p {
        font-size: 18px;
        margin: 20px 0 0 0;
        padding: 0;
        line-height: 1.5;
      }
      button {
       
        background-color: #fa0909;
        align-items: last baseline;
      }
  </style>

  <!-- end header section -->
  <br><br>
  <div class="container">
      <div class="column">
        <h2 class="column-heading">Patient</h2>
        <?php

        $i = 1;
        while ($row = mysqli_fetch_assoc($res)) {
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
            <button class="button"><a href="/uploads/<?php echo ($row['verification_doc']) ?>">View Documents</a></button>
        </div>
        <br>
        <?php } ?>

      </div>

     
  </div>
</body>
<br><br>
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 All Rights Reserved By
      <a href="https://html.design/">Crowdfunding - AISHI</a>
    </p>
  </section>
  <!-- footer section -->

    