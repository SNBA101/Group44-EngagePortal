<?php
// functions.php
require_once 'db_conn.php';

function isAdmin($user_id) { // Replace this function with your own admin checking logic
  // Example: Check if user is an admin
  // This is just an example, you should implement your own admin checking mechanism
  return $user_id == 1; // Assuming user with ID 1 is the admin
}

function getAnnouncements() {
  global $conn;

  $sql = "SELECT * FROM announcements ORDER BY created_at DESC";
  $result = $conn->query($sql);

  $announcements = array();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $announcements[] = $row;
    }
  }

  return $announcements;
}
?>