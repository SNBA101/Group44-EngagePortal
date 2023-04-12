<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {  $username = $_SESSION['username']; 
   include "navbar.php"
   ?>

  
<style>
/* Hide form by default */
.form-popup {
  display: none;
   }
</style>
<head>
	<title>Personal Information</title>

	<link rel="stylesheet" href="style.css"> 
</head>
<body>
   <table>
      <tr>
         <th>ID</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email</th>
         <th>Phone Number</th>
         <th>Address</th>
         <th>Job Role</th>
      </tr>

<?php
   
   $query = "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
   $result = mysqli_query($conn, $query);
   while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['firstname']."</td>";
      echo "<td>".$row['lastname']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['phone']."</td>";
      echo "<td>".$row['address']."</td>";
      echo "<td>".$row['jobrole']."</td>";
      echo "</tr>";
   }
?>
   </table>

<button class="open-button" onclick="openForm()">Edit Information</button>

<div class="form-popup form-select" id="updateForm">
   <p>Keep any fields you would like to keep the same blank and click update.<p>

   <form method="post" action="update_info.php">

   <label for="firstname">First Name</label>
   <input type="text" name="firstname" id="firstname">

   <label for="lastname">Last Name</label>
   <input type="text" name="lastname" id="lastname">

   <label for="email">Email</label>
   <input type="text" name="email" id="email">

   <label for="phone">Phone Number</label>
   <input type="text" name="phone" id="phone">

   <label for="address">Address</label>
   <input type="text" name="address" id="address">

   <button id="updateForm" type="submit" value="Update">Update</button>
   <button class="cancel" type="button" class="cancel" onclick="closeForm()">Cancel</button>
   </form>
</div>


<script>
function openForm() {
  document.getElementById("updateForm").style.display = "block";
}

function closeForm() {
  document.getElementById("updateForm").style.display = "none";
}
</script>

</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>