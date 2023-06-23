<?php
session_start();

//$user = $_SESSION['session_user'];
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dbms_project";
$mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?php
if (isset($_POST['payment_id']) && isset($_POST['amt']) && isset($_POST['name']) && isset($_POST['mob'])&& isset($_POST['uid'])) {
        $amt = $_POST['amt'];
        $name = $_POST['name'];
        $mob = $_POST['mob'];
        $pay_id = $_POST['payment_id'];
        $uid = $_POST['uid'];
        //$payment_status="pending";
        $sql = "SELECT type from credentials where id = '$uid'";
        
        $query1 = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_assoc($query1);
        $type = $row['type'];

        if($type == 1){
                $sql1 = "SELECT CONCAT(fname,' ', sname) as wholename FROM donatee_info where uid = '$uid'";
                //$sql = "SELECT fname,sname from donatee_info where id = '$uid'";
                
                $query2 = mysqli_query($mysqli, $sql1);
                $row = mysqli_fetch_assoc($query2);
                $donated_to = $row['wholename'];

                mysqli_query($mysqli, "insert into donator(pay_id,name,payamt,mobile,donated_to) values ('$pay_id','$name','$amt','$mob','$donated_to')");
                //sleep(5);
               mysqli_query($mysqli,"update donatee_info set raised_amt = raised_amt + '$amt' where uid = '$uid'");
                //sleep(5);
        }
        if($type == 2){
                $sql2 = "SELECT  name FROM ngo_inf where uid = '$uid'";
                $query3 = mysqli_query($mysqli, $sql2);
                $row = mysqli_fetch_assoc($query3);
                $donated_to = $row['name'];
                mysqli_query($mysqli, "insert into donator(pay_id,name,payamt,mobile,donated_to) values ('$pay_id','$name','$amt','$mob','$donated_to')");
                //sleep(5);
               mysqli_query($mysqli,"update ngo_inf set raised_amt = raised_amt + '$amt' where uid = '$uid'");
                //sleep(5);
        }

       
}

?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
        <!--<form method="post" action="redirect.php">
        <input type="hidden" id="uid" name="uid" value=<?php //echo $uid ?>><br>
        <input type="hidden" id="amt" name="amt" value=<?php // echo $amt ?>><br>-->

        </form>
        <script>
                //window.location.href = 'redirect.php';
        </script>
</body>

</html>