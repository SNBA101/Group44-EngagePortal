<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="style.css"> 
</head>
<body>
	<div class="wrap">
	<video class="fog" playsinline autoplay muted loop>
		<source src="img/fog.mp4" type="video/mp4" /> 
	</video>
	</div>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<?php if ($_SESSION['role'] == 'admin') {?>
      		<!-- For Admin -->
			
	      	<ul class="nav">
				<li class="nav"><a class="nav" href="admin_home.php">View User Table</a></li>
				<li class="nav"><a class="nav" href="announcements2.php">View Announcements</a></li>
				<li class="nav"><a class="nav" href="training_material.php">View Training Material</a></li>
				<li class="nav"><a class="nav" href="payslips.php">View Payslips</a></li>
				<li class="nav"><a class="nav" href="feedback.html">Give feedback</a></li>
				<li class="nav"><a class="nav" href="my_info.php">View Your Personal Information</a></li>
			</ul>
      		<div class="card" style="width: 18rem;">
			  <img src="img/admin.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <button onclick="location.href='logout.php';" class="logout">Logout</button>
			  </div>
			</div>
			
      	<?php }else { ?>
      		<!-- FORE USERS -->
			  <ul class="nav">
				<li class="nav"><a class="nav" href="announcements2.php">View Announcements</a></li>
				<li class="nav"><a class="nav" href="training_material.php">View Training Material</a></li>
				<li class="nav"><a class="nav" href="payslips.php">View Payslips</a></li>
				<li class="nav"><a class="nav" href="feedback.html">Give feedback</a></li>
				<li class="nav"><a class="nav" href="my_info.php">View Your Personal Information</a></li>
			</ul>
      		<div class="card" style="width: 18rem;">
			  <img src="img/user.png" 
			       class="card-img-top" 
			       alt="user image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <button onclick="location.href='logout.php';" class="logout">Logout</button>
			  </div>
			</div>
      	<?php } ?>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>
