<!DOCTYPE html>

<html lang="en">

<form method="post" action="post_announcement.php">
  <label for="announcement_name">Name of Announcement:</label>
  <input type="text" id="announcement_name" name="announcement_name">
  
  <label for="announcement_body">Announcement:</label>
  <textarea id="announcement_body" name="announcement_body"></textarea>
  
  <button type="submit">Post Announcement</button>
</form>

  function validateForm() {
    var name = document.getElementById("announcement_name").value;
    var body = document.getElementById("announcement_body").value;

    if (name == "" || body == "") {
      alert("Please fill out all fields.");
      return false;
    }
    
    return true;
  }

<button type="submit" onclick="return validateForm()">Post Announcement</button>

<?php
session_start();

// Check if the user is authorized to post announcements
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
  // Redirect to the login page or display an error message
  header('Location: login.php');
  exit();
}

// Insert the announcement into the database
$announcement_name = $_POST['announcement_name'];
$announcement_body = $_POST['announcement_body'];
$announcement_date = date('Y-m-d');

// Create a connection to the database
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

// Check if the connection is successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert the announcement into the database
$sql = "INSERT INTO announcements (name, body, date) VALUES ('$announcement_name', '$announcement_body', '$announcement_date')";

if ($conn->query($sql) === TRUE) {
  echo "Announcement posted successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

