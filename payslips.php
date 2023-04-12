<?php
// Connect to the database
session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id']))

// Get the user's username
$username = $_SESSION['username'];

// Retrieve the user's payslips from the database
$sql = "SELECT * FROM payslips WHERE username = '$username'";
$result = $conn->query($sql);

// Display the payslips in a table
if ($result->num_rows > 0) {
    echo "<table><tr><th>Pay Period</th><th>Pay Date</th><th>Net Pay</th><th>Name</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["pay_period"] . "</td><td>" . $row["pay_date"] . "</td><td>" . $row["net_pay"] . "</td><td>" . $row["name"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No payslips found for this user.";
}

// Close the database connection
$conn->close();
?>