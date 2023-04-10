<?php  

$sname = "172.21.224.1";
$uname = "Group44";
$password = "";

$db_name = "engageportal_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}

?>