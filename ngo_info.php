<?php
      $dbserver = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $dbname = "dbms_project";
      $mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

      $uid = $_POST['uid'];
      $sql = "SELECT * from ngo_inf where uid = '$uid'";
      $res = mysqli_query($mysqli, $sql);
      $row = mysqli_fetch_assoc($res);
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
  
    
    <title>Page Title</title>
    <style>
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
      p {
        font-size: 18px;
        margin: 20px 0 0 0;
        padding: 0;
        line-height: 1.5;
      }
      button {
        margin-top: 50px;
        padding: 15px 55px;
        outline: none;
        border: none;
        border-radius: 30px;
        border: 1px solid #fa0909;
        color: #fff;
        font-weight: bold;
        background-color: #fa0909;
        align-items: last baseline;
      }
    </style>
  
  <body>
    <br><br>
    <div class="container">
      <img class="image" src="/uploads/<?php echo ($row['image']);?> " style="width:600px;height: 800px" alt="Placeholder Image">
      <div class="content">
        <h1>Please Donate</h1><br>
       <!-- <img class="image" src="/uploads/<?php echo ($row['image']);?> " style="width:500px;height: 700px" alt="Placeholder Image">-->
        <label for="name">Name: <?php 
								          echo "{$row['name']}";
							?></label><br>
          <label for="cause">Cause: <?php echo "{$row['cause']}";?></label><br>
                
    
                <label for="story">Story: <?php echo "{$row['story']}";?></label><br>
                
    
                <label for="raised_amount">Raised Amount: <?php echo "{$row['raised_amt']}";?></label><br>
                <form action="payment.php" method="post">
        <input type="hidden" id="uid" name="uid" value=<?php echo ($row['uid']) ?>><br>
        <input type="submit" name = "s1" value="Help Me" style="background:#fa0909;color:#fff;"><br>
        </form>
      </div>
      </div>
  </body>
</html>
