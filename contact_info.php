<!DOCTYPE html>
<html>
<head>
	<title>Employee Contact Information</title>
	<link rel="stylesheet" href="style.css">
</head>
<?php 
include "navbar.php";
?>
<body>
	<h1>Employee Contact Information</h1>
	<form action="" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Submit">
	</form>

	<?php
		//Check if the form has been submitted
		if(isset($_POST['username']) && isset($_POST['password'])){
			//Check if the username and password are correct
			if($_POST['username'] == "admin" && $_POST['password'] == "password"){
				//Connect to the database and retrieve the employee information
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "employees";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);

				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}

				//Retrieve the employee information
				$sql = "SELECT name, email, phone FROM employee_info";
				$result = $conn->query($sql);

				//Output the employee information
				if ($result->num_rows > 0) {
				    echo "<table><tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";
				    }
				    echo "</table>";
				} else {
				    echo "0 results";
				}
				$conn->close();
			}
			else{
				echo "Invalid username or password";
			}
		}
	?>
</body>
</html>
