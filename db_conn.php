<?php
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "engageportal_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "connection Failed!";
    exit();
}


//for the login
?>