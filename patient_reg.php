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
                <li class="nav-item">
                  <a class="nav-link" href="profile.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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
      <!-- end header section -->
    <style>

    
    .container {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      .container1 {
        padding: 30px;
        background-color: #f1f1f1;
        width: 50%;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin-left: 350px;

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
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      
      input[type="text"], input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }
      
      button[type="submit"], button.cancelbtn {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
      }
      
      button[type="submit"]:hover, button.cancelbtn:hover {
        background-color: #45a049;
      }
      
      .psw a {
        color: #4CAF50;
      }
      
      .psw a:hover {
        text-decoration: underline;
      }
      </style>
      <?php 
      function create_entry1($mysqli,$user,$fname,$lname,$cause,$story,$exp_amt,$image,$vdoc,$uploadPath){
        $fetch = "SELECT id from credentials where username = '$user'";
        $query = mysqli_query($mysqli, $fetch);
        $row = mysqli_fetch_assoc($query);
        $uid = $row['id'];
      
        $sql = "INSERT into donatee_info(uid,fname,sname,cause,story,expamount,image,verification_doc,status) VALUES ('$uid','$fname','$lname','$cause','$story','$exp_amt','$image','$vdoc',0)";
        if (mysqli_query($mysqli, $sql)) { //uncommented echo
          //echo "Records inserted successfully.";
          move_uploaded_file(basename($image), $uploadPath);
          ?>
            <script>
                alert("Records inserted successfully");
                window.location = "profile.php";
            </script>
          <?php
          } else {
          echo "ERROR: Could not able to execute $sql" . mysqli_error($mysqli);
          }
       // $mysqli->close();
      }
      ?>
   <!--uid
uname
sname
cause
story
expam,oiunt
image
verification doc-->
<body>
  <?php 
   // $sql = "select id from credentials where username = '$user'";
    $check = "select * from donatee_info where uid = (select id from credentials where username = '$user')";
    $query = mysqli_query($mysqli, $check);
    $rows = mysqli_num_rows($query);
    //IF EXISTS (select uid from credentials where username = 'priya123');
    if($rows > 0){
      echo "Fundraiser already started";
    }else{
  ?>
<?php 
$errormsg1 = "";
$valid = 0;
$currentDirectory = getcwd();
$uploadDirectory = "/uploads/"; //path of upload directory
$fileExtensionsAllowed1 = ['jpeg', 'jpg', 'png'];
if (isset($_POST['s1'])) {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $cause = $_POST["cause"];
  $story = $_POST["story"];
  $exp_amt = $_POST["expamt"];
  $image = $_FILES['img']['name'];
  $vdoc = $_FILES['vdoc']['name'];
  //image 
  $fileSize1 = $_FILES['img']['size']; //size of file
		$fileTmpName1  = $_FILES['img']['tmp_name']; //file resides in temp dir of server
		$fileType1 = $_FILES['img']['type']; //tells type of input -MIME TYPE of file
		$fileext1a = explode('.', $image);
		$fileext2a = (end($fileext1a));
		$fileExtension1 = strtolower($fileext2a);
		$uploadPath = $currentDirectory . $uploadDirectory . basename($image); //place where file is stored

		//if (isset($_POST['s1'])) {//if submit button is clicked

		if (!in_array($fileExtension1, $fileExtensionsAllowed1)) { //if allowed file extensions not present
			echo "<br>";
			$errors1[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
		}

		if ($fileSize1 > 4000000) { //if size is greater than 4mb
			echo "<br>";
			$errors1[] = "File exceeds maximum size (4MB)";
		}

		if (empty($errors1)) { //if error array is empty

			$didUpload = move_uploaded_file($fileTmpName1, $uploadPath); //changed here

			if ($didUpload) { //if file is moved to dir
				echo "<br>";
				echo "The file " . basename($image) . " has been uploaded";
			} else {
				echo "<br>";
				echo "An error occurred. Please contact the administrator.";
			}
		} else {
			foreach ($errors1 as $error1) {
				echo "<br>";
				echo $error1 . "These are the errors";
			}
		}
    //verification doc
    $fileSize2 = $_FILES['vdoc']['size']; //size of file
		$fileTmpName2  = $_FILES['vdoc']['tmp_name']; //file resides in temp dir of server
		$fileType2 = $_FILES['vdoc']['type']; //tells type of input -MIME TYPE of file
		$fileext2a = explode('.', $vdoc);
		$fileext2b = (end($fileext2a));
		$fileExtension2 = strtolower($fileext2b);
		$uploadPath = $currentDirectory . $uploadDirectory . basename($vdoc); //place where file is stored

		//if (isset($_POST['s1'])) {//if submit button is clicked

		if (!in_array($fileExtension2, $fileExtensionsAllowed1)) { //if allowed file extensions not present
			echo "<br>";
			$errors1[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
		}

		if ($fileSize2 > 4000000) { //if size is greater than 4mb
			echo "<br>";
			$errors1[] = "File exceeds maximum size (4MB)";
		}

		if (empty($errors1)) { //if error array is empty

			$didUpload1 = move_uploaded_file($fileTmpName2, $uploadPath); //changed here

			if ($didUpload1) { //if file is moved to dir
				echo "<br>";
				echo "The file " . basename($vdoc) . " has been uploaded";
			} else {
				echo "<br>";
				echo "An error occurred. Please contact the administrator.";
			}
		} else {
			foreach ($errors1 as $error1) {
				echo "<br>";
				echo $error1 . "These are the errors";
			}
		}


  create_entry1($mysqli,$user,$fname,$lname,$cause,$story,$exp_amt,$image,$vdoc,$uploadPath);

}
//status 0 = application under processing
//status 1 = application aproved
/*
function create_entry1($mysqli,$user,$fname,$lname,$cause,$story,$exp_amt,$image,$vdoc,$uploadPath){
  $fetch = "SELECT id from credentials where username = '$user'";
  $query = mysqli_query($mysqli, $fetch);
  $row = mysqli_fetch_assoc($query);
  $uid = $row['id'];

  $sql = "INSERT into donatee_info(uid,fname,sname,cause,story,expamount,image,verification_doc,status) VALUES ('$uid','$fname','$lname','$cause','$story','$exp_amt','$image','$vdoc',0)";
  if (mysqli_query($mysqli, $sql)) { //uncommented echo
    //echo "Records inserted successfully.";
    move_uploaded_file(basename($image), $uploadPath);
    ?>
			<script>
          alert("Records inserted successfully");
          window.location = "profile.php";
      </script>
    <?php
		} else {
    echo "ERROR: Could not able to execute $sql" . mysqli_error($mysqli);
    }
 // $mysqli->close();
}
*/

?>
 
     <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
        <div class="container1">
     

      <label for="fname"><b>Firstname</b></label>
      <input type="text" placeholder="Enter Firstname" name="fname" required><br>
  
      <label for="lname"><b>Lastname</b></label>
      <input type="text" placeholder="Enter Lastname" name="lname" required><br>

      <label for="cause"><b>Enter Cause</b></label>
      <input type="text" placeholder="Cause" name="cause" required><br>

      <label for="story"><b>Enter your Story</b></label>
      <input type="text" placeholder="Story" name="story" required><br>

      <label for="uname"><b>Expected Amount</b></label>
      <input type="text" placeholder="ExpAmt" name="expamt" required><br>

      <label for="img"><b>Upload Image</b></label>
      <input type="file" placeholder="img" name="img" required><br>

      <label for="vdoc"><b>Upload Verifiaction Document</b></label>
      <input type="file" placeholder="Verifydoc" name="vdoc" required><br>
  
      <button type="submit" name = "s1">Submit</button>
      <label>
    </div>
    </form> <?php }?>

</body>

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