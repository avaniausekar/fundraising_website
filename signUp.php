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
.container1 {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 20px;
  background-color: whitesmoke;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Adds a box-shadow */
  width: 60%; /* Sets the width of the container to 80% of the parent element */
  height: 60%; /* Sets the height of the container to 400px */
  margin-left: 300px;
  margin-top: 50px;
  border-radius: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="password"],
select {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  width: 50%;
  margin-bottom: 20px;
}

button[type="submit"] {
  /*background-color: #4CAF50;*/
  background-color: rgb(0, 0, 125);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]{
  /*background-color: #45a049;*/
  background-color: rgb(0, 0, 125);
  margin-bottom: 20px;
  border-radius: 20px;
}
</style>

<body>
  

    <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class = container1>
      

        <label for="uname"><b>Name</b></label>
        <input type="text" placeholder="Enter Username" name="user" required><br>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter password" name="pass1" required><br>

        <label for="Rpsw"><b>Retype Password</b></label>
        <input type="password" placeholder="ReEnter password" name="pass2" required><br>

        <label for="mail"><b>Enter Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required><br>

        <select name="SignUp-type" id="SignUp-type">
          <!--<option value="admin">Admin</option>-->
          <option value="user">User</option>
          <option value="ngo">NGO</option>
          <!--<option value="donator">Donator</option>-->
        </select><br><br>
        <button type="submit" name = "s1">SignUP</button>
      </div>
     
    </form>
      </body>
      <!-- footer section -->
<section class="container-fluid footer_section">
  <p>
    &copy; 2023 All Rights Reserved By
    <a href="https://html.design/">Crowdfunding - AISHI</a>
  </p>
</section>
</html>
        <?php
	$errormsg1 = "";
	$errormsg2 = "";
	$valid2 = 0;
	if (isset($_POST['s1'])) {
		$name = $_POST["user"]; //takes in first name
		//$last = $_POST["last"]; //takes in last name
		$email = $_POST["email"]; //email id field
		//$user = $_POST["user"]; //username
		$pass1 = $_POST["pass1"]; //password
		$pass2 = $_POST["pass2"]; //retype password
    $login_type = $_POST["SignUp-type"];

    if ($login_type == "user") {
      $login_type = 1;
    }
    if ($login_type == "ngo") {
      $login_type = 2;
    }
    
		if ((strcmp(($pass1), ($pass2)))) {
			//comparing if retyped password is same
			$errormsg2 = '<p>Please enter the same password at the Password fields. </p>';
		} else {
			$valid2 = 1;
		}
	}
	if ($valid2 == 1) {
		//funtion create_entry
		create_entry($name,$pass1,$email,$login_type);
	}
	function create_entry($name,$pass1,$email,$login_type)
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dbms_project";
		//represents a connection between php and mysql db
		$mysqli = new mysqli($servername, $username, $password, $dbname);
		//check connection connect_error is string that describes error: null for no error
		if ($mysqli->connect_error) {
			//prints msg and exits current script
			die("Connection failed: " . $mysqli->connect_error);
		}
		//password_hash called to encript password
		$hashed_password = password_hash($pass1, PASSWORD_DEFAULT); 
		//inserts into db
		$sql = "INSERT INTO credentials (username,password,email,type) VALUES
				('$name','$hashed_password','$email',$login_type)";
		if (mysqli_query($mysqli, $sql)) { //uncommented echo 
      //echo "Records inserted successfully.";
    ?>
			
      <script>
          alert("Records inserted successfully");
          window.location = "login.php";
      </script>

      <?php
			//header("Location:login.php");
			//exit();
		} else {
			//for duplicate entry
			if (mysqli_errno($mysqli) == 1062) {
				echo "<p>Username already inserted (duplicate entry)</p>";
			} else {
				echo "ERROR: Could not able to execute $sql" . mysqli_error($mysqli);
			}
		}
		$mysqli->close();
	}
	?>

	<?php
	if (($errormsg2 != "") && isset($_POST['s1']))
		echo $errormsg2;
	?>
