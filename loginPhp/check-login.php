<?php
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $role = test_input($_POST['role']);

    if(empty($username)){
        header("Location: ../index.php?error=User Name is required");
    }else if(empty($password)){
        header("Location: ../index.php?error=Password is required");
    }else {
        // hashing the password
        $password = md5($password);

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";

        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) === 1){
            //the user name must be unique
            $row = mysqli_fetch_assoc($result);
            echo "<pre>";
            print_r($row);
        }else{
            echo"Not working";
        }
    }


}else{
    header("Location: ../index.php");
}


?>