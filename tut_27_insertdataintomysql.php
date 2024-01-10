<?php
// connecting to the Database
$servername="localhost";
$username="root";
$password="";
$database="dbharry";

// Create a connection
$conn =mysqli_connect($servername,$username,$password,$database);

// die if connection was not successful
if(!$conn){
die("Sorry we failed to connect ".mysqli_connect_error());

}else{
    echo"Connection was successful <br>";


// // sql query to be executed

// $sql="INSERT INTO `phptrip` (`name`,`dest`) VALUES ('Roman','popoppo')";
// $result=mysqli_query($conn,$sql);

// // Add a new trip to the Trip table in the database

// if($result){
//     echo"The record has been inserted successfully!<br>";
// }else{


// echo"The record was not inserted successfully because of this error ----->".mysqli_error($conn);

// }



}



// sql query to be executed

$sql="INSERT INTO `phptrip` (`name`,`dest`) VALUES ('Roman','popoppo')";
$result=mysqli_query($conn,$sql);

// Add a new trip to the Trip table in the database

if($result){
    echo"The record has been inserted successfully!<br>";
}else{


echo"The record was not inserted successfully because of this error ----->".mysqli_error($conn);

}


?>