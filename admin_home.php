<?php
// establish database connection
$sname = "127.0.0.1";
$uname = "Group44";
$password = "";

$db_name = "engageportal_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);


// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// retrieve user data from database
$sql = "SELECT * FROM employees";
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
