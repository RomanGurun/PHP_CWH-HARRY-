


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get/Post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tut21.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
     $name=$_POST['name'];
     $email=$_POST['email'];
   $desc=$_POST['desc'];
// echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
// <strong>Success</strong> Your entry has been submitted 
// successfully!
// <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';

}

// Connecting to the Database
$servername="localhost";
$username="root";
$password="";
$database="contacts";

// create a connection
$conn=mysqli_connect($servername,$username,$password,$database);



// submit these to a database
if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}else
{
   

// submit these to a database
//sql query to be executed
$sql ="INSERT INTO `contactus22` (`name`,`email`,`concern`,`dt`) VALUES('$name','$email','$desc',current_timestamp()) ";
$result =mysqli_query($conn,$sql);



if($result){

  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Your entry has been submitted 
  successfully!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

}else{
  echo"The record was not inserted successfully because of this error---------->".mysqli_error($conn);
  // echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  // <strong>Error!</strong> We are facing some technical issue and your entry has not been submitted 
  // successfully! We regret the inconvinence caused!

  // <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  // </div>';



}


}

?>

<div class="container mt-3">
<h1>Contact us for your concerns</h1>
<form action="tut28_form.php" method="post">
  <fieldset >
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="">
     </div>
    <div class="mb-3">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="">
      <small id="emailHelp" class="form-text-muted">We'll never share your email with anyone else.</small>
 
    </div>

    <div class="mb-3">
      <label for="desc" class="">Description</label>
      <textarea name="desc" class="form-control" id="desc" cols="30" rows="10"></textarea>
    
    </div>
 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>








</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> 