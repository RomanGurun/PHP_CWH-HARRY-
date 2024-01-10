<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="dbharry";
// Create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to conect". mysqli_connect_error());
}else{
    echo"Connection was successful <br>";
}

?>