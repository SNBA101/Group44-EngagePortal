<?php
    session_start();

    if (isset($_SESSION['username']) && isset($_SESSION['id']))
    {   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style ="min-height: 100vh">

       <?php if ($_SESSION['role'] == 'admin'){ ?>
            <!-- For Admin -->
            <div class="card" style="width: 18rem;">
                <img src="img/admin.png" class="card-img-top" alt="admin image">
                <div class="card-body text-center">
                    <h5 class="card-title">
                        <?=$_SESSION['name']?>
                    </h5>
                    
                    <a href="logout.php" class="btn btn-dark">Logout</a>
                </div>
            </div>
            <div class="p-3">
                <?php include 'php/members.php' ?> 
                <h1 class="display-4 fs-1">Members</h1>
                <table class="table" style="width: 32rem ">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">User name</th>
                        <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
      <?php } ?>
    </div>
</body>
</html>

<?php }  else {
    header("Location: ../index.php");
} ?>