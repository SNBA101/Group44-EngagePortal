<?php
// functions.php

include 'db_conn.php';

function isAdmin($username) {
  global $conn; 
  
  // Prepare SQL statement
  $sql = "SELECT role FROM users WHERE username = ?";
  $stmt = mysqli_prepare($conn, $sql);

  // Bind parameters and execute statement
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);

  // Get result
  $result = mysqli_stmt_get_result($stmt);

  // Check if user is an admin
  if ($row = mysqli_fetch_assoc($result)) {
    if ($row["role"] == "admin") {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }

  // Close statement and connection
  mysqli_stmt_close($stmt);
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