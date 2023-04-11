<?php
// establish database connection
$servername = "localhost";
$username = "Elias";
$password = "1234";
$dbname = "database.sql";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// retrieve user data from database
$sql = "SELECT * FROM employee_info";
$result = mysqli_query($conn, $sql);

// display user data in table
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// close database connection
mysqli_close($conn);
?>
