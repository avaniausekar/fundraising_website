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
//if (isset($_POST['payment_id']) && isset($_POST['amt']) && isset($_POST['name']) && isset($_POST['mob'])) {
        $amt = '100';
        $name = 'demo';
        $mob = '123456789';
        //$pay_id = $_POST['payment_id'];
        $uid = '1';/*
        //$payment_status="pending";
        $added_on = date('Y-m-d h:i:s');
        //$sql = $sql1 . ";" . $sql2;
        //mysqli_multi_query($mysqli, $sql);
        mysqli_query($mysqli, "insert into donator(name,payamt,mobile) values ('$name','$amt','$mob')");
        //sleep(5);
       mysqli_query($mysqli,"update donatee_info set raised_amt = raised_amt + '$amt' where uid = '$uid'");
        //sleep(5);*/
        $sql = "SELECT CONCAT(fname,' ', sname) as wholename FROM donatee_info where uid = '$uid'";
        //$sql = "SELECT fname,sname from donatee_info where id = '$uid'";
        
        $query1 = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_assoc($query1);
        $donated_to = $row['wholename'];
                mysqli_query($mysqli, "insert into donator(name,payamt,mobile,donated_to) values ('$name','$amt','$mob','$donated_to')");
                //sleep(5);
               mysqli_query($mysqli,"update donatee_info set raised_amt = raised_amt + '$amt' where uid = '$uid'");
                //sleep(5);
//}
