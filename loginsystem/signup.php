<?php

// max_length attribute find in html

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $showAlert = false;
    $showError = false;

    include 'partials/_dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // CHECK whether this username exists
    $existSql = "SELECT * FROM `users` WHERE username ='$username' ";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    if ($numExistRows > 0) {
        $showError = "Username Already Exists";
    } else {
        if (($password == $cpassword)) {
$hash=password_hash($password,PASSWORD_DEFAULT);

            $sql = "INSERT INTO `users` ( `username`, `password`, `date`) VALUES ( '$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match ";
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>signup</title>  
</head>
  <body>
 <?php
  require 'partials/_nav.php';
 ?>

 <?php
 if($showAlert){
 echo'
 <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>Your account is now created and you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

 }

 if($showError){
  echo'
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error!</strong>'.$showError.'
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
 
  }
 



?>

<div class="container my-4">
<h1 class="text-center">Signup to our Website</h1>

<form action="signup.php" method="post">

<div class="mb-3">
  <label for="username" class="form-label">Username</label>
  <input type="text" maxlength="11" class="form-control" id="username" name="username" placeholder="Enter UserName" required>
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" maxlength="23" class="form-control" id="password" name="password"  placeholder="Enter Password" required>
</div>

<div class="mb-3">
  <label for="cpassword" class="form-label"> Confirm Password</label>
  <input type="password" class="form-control" id="cpassword" name="cpassword" required>
  <div id="emailHelp" class="form-text">Make sure to type the same password.</div>

</div>
<!-- <div class="form-check">
      <input class="form-check-input" type="checkbox" id="inlineFormCheck">
      <label class="form-check-label" for="inlineFormCheck">
        Check me out
      </label>
    </div> -->
<button  type="submit" class="btn btn-primary">SignUp</button>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>