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

                $uid = $_POST['uid'];
                $status = $_POST['verify'];
                $update = "update donatee_info set status = '$status' where uid = '$uid'";
                mysqli_query($mysqli, $update);
                $mysqli->close();
                header("Location:admin_profile.php ");
                ?>
                <!--<html>
                        <script>
                                alert();
                                window.location = "admin_profile.php";
                                
                        </script>
                </html>-->
<?php
        }
        
?>