<?php
echo"Welcome to PHP Connectivity <br>";


$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry we failed to conect". mysqli_connect_error());
}else{
    echo"Connection was successful <br>";
}


// Create a db
$sql = "CREATE DATABASE dbRomadn";
$result=mysqli_query($conn,$sql);


// Check for the database creation success
if($result){

echo"The db was created successfully!<br>";

}else{

    echo"The db was not created successfully because of this error ---->".mysqli_error($conn);

}

echo"The result is <br>";
echo var_dump($result);
echo"<br>";



?>