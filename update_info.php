<?php
session_start();
include "db_conn.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

//Create SQL query to update the record, starting off with this
$sql = "UPDATE users SET ";

//For any empty fields, keep original values and do not change information, otherwise concatenate to query
if (!empty($firstname)) {
    $sql .= "firstname='$firstname', ";
    }
  
if (!empty($lastname)) {
    $sql .= "lastname='$lastname', ";
    }

if (!empty($email)) {
    $sql .= "email='$email', ";
    }

if (!empty($phone)) {
    $sql .= "phone='$phone', ";
    }

if (!empty($address)) {
    $sql .= "address='$address', ";
    }

//Remove last comma and space from SQL query
$sql = rtrim($sql, ", ");

//Optionally add verification at the end, I have decided to keep this out for now
// $sql .= " WHERE id='$id'";

// Execute SQL query
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Information updated successfully";
  } else {
    echo "Error updating the following fields: " . mysqli_error($conn);
  }
?>