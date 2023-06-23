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
          <a class="navbar-brand">
            <img src="Blue and Coral Minimalist Community Foundation Charity Logo.jpg" style="width:100px; height:100px;" alt="">
            <h1>
              AISHI
            </h1>


          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="program.html"> Our Work </a>
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
    <style>
 form {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }
  
 
    input[type=text], input[type=password], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
    
      button[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
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
      button[type=submit]:hover {
        background-color: #45a049;
      }
    
      .container1 {
        padding: 30px;
        margin-left: 400px;
        background-color: #f1f1f1;
        width: 50%;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

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
        .cancelbtn, .signupbtn {
          width: 100%;
        }
      }
    </style>
    <body>
    <div class="container1">
      <form action="payment.php" method="post">

        <label for="name">Full name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="amount">Donation amount:</label>
        <input type="number" id="amount" name="amount" required><br>

        <label for="mob">Mobile:</label>
        <input type="text" id="mob" name="mob" required><br>

        <label for="anonymous">Donate anonymously:</label>
        <input type="checkbox" id="anonymous" name="anonymous" value="0"><br>
        <label>Proceed to payment gateway</label>
        <button type="submit">Pay Now</button>
      </form>
    </div>
    </body>