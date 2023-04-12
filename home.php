<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<?php if ($_SESSION['role'] == 'admin') {?>
      		<!-- For Admin -->
			
	      	<ul>
				<li><a href="admin_home.php">View User Table</a></li>
				<li><a href="announcements2.php">View Announcements</a></li>
				<li><a href="training_material.php">View Training Material</a></li>
				<li><a href="payslips.php">View Payslips</a></li>
				<li><a href="feedback.html">Give feedback</a></li>
				<li><a href="my_info.php">View Your Personal Information</a></li>
			</ul>
      		<div class="card" style="width: 18rem;">
			  <img src="img/admin.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
			
      	<?php }else { ?>
      		<!-- FORE USERS -->
			  <ul>
				<li><a href="announcements2.php">View Announcements</a></li>
				<li><a href="training_material.php">View Training Material</a></li>
				<li><a href="payslips.php">View Payslips</a></li>
				<li><a href="feedback.html">Give feedback</a></li>
				<li><a href="my_info.php">View Your Personal Information</a></li>
			</ul>
      		<div class="card" style="width: 18rem;">
			  <img src="img/user.png" 
			       class="card-img-top" 
			       alt="user image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
      	<?php } ?>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>
