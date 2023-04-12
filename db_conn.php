<?php  

$sname = "127.0.0.1";
$uname = "Group44";
$password = "";

$db_name = "engageportal_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);



if (!$conn) {
	echo "Connection Failed!";
	exit();
}

?>