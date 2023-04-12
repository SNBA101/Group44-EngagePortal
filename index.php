<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>login-system</title>
	<link rel="stylesheet" href="style.css"> 
	
	
</head>
<body>
      <div>
      	<form class="login" action="loginPhp/check-login.php" method="post">
			<img class="login-image" src="img/login.png" alt="">
      	      <h1 class=login-text>LOGIN</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mb-3">
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username"
				   placeholder="Username">
		  </div>
		  <div class="mb-3">
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password"
				   placeholder="Password">
		  </div>
		  <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="admin">Admin</option>
		  </select>
		 
		  <button type="submit" 
		          class="btn btn-primary">LOGIN</button>
		</form>
      </div>
</body>
              
</html>
<?php }else{
	header("Location: home.php");
} ?>
