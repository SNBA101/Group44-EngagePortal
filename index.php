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

        <form class = "border shadow p-3" action="php/check-login.php" method="post" style="width: 450px">

        <h1 class="text-center p-3">LOGIN</h1>
            <div class="mb-3">
                <label for="username" class="form-label">User name</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" id="password">
            </div>

            <div class="mb-1">
                <label class="form-label">Select User Type:</label>
                
            </div>
            <select class="form-select mb-3" aria-label="Default select example">
                <option selected value="user">User</option>
                <option value="admin">Admin</option>

            </select>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>