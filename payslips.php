<?php
// Connect to the database
$sname = "127.0.0.1";
$uname = "Group44";
$password = "";

$db_name = "engageportal_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);


// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the user's username
$username = $_SESSION['username'];

// Retrieve the user's payslips from the database
$sql = "SELECT * FROM payslips WHERE username = '$username'";
$result = $conn->query($sql);

// Display the payslips in a table
if ($result->num_rows > 0) {
    echo "<table><tr><th>Pay Period</th><th>Pay Date</th><th>Net Pay</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["pay_period"] . "</td><td>" . $row["pay_date"] . "</td><td>" . $row["net_pay"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No payslips found for this user.";
}

// Close the database connection
$conn->close();
?>