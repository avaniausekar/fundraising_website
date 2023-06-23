<?php
session_start();

$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dbms_project";
$mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if (isset($_POST['amt']) && isset($_POST['uid'])) {
        $amt = $_POST['amt'];
        $uid = $_POST['uid'];
        // mysqli_query($mysqli,"insert into orders(name,amount,payment_status,added_on) values('$name','$amt','$payment_status','$added_on')");
        //$_SESSION['OID']=mysqli_insert_id($mysqli);
        // mysqli_query($mysqli, "insert into donator(pay_id,name,payamt,mobile) values ('$pay_id','$name','$amt','$mob')");
        mysqli_query($mysqli, "update donatee_info set raised_amt = raised_amt + '$amt' where uid = '$uid'");
}

?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
        <script>
               /* window.setTimeout(function() {

                        // Move to a new location or you can do something else
                        window.location.href = 'thank_you.php';

                }, 5000);*/

                //window.location.href = 'thank_you.php';
        </script>
</body>

</html>