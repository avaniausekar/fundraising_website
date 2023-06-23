<!DOCTYPE html>
<html>
<head>
	
	
</head>
<body>
<link>

	<script>
          alert("Logged out successfully");
          window.location = "index.php";
      </script>
</body>
<?php 
	session_start();//to join current session
	
	setcookie(session_name(), " ", 1);///deletes the cookie by setting expiration time
	unset($_SESSION['session_user']); //session destroyed
	session_destroy();//php session terminated
	//header('Location: login.php'); //redirects to login page
	exit; 
?>