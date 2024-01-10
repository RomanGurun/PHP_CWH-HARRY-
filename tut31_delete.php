<?php
// fetching conceptsssssssss

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

$sql="DELETE FROM `phptrip` WHERE `dest` = 'Dhading' LIMIT 7 ";
$result=mysqli_query($conn,$sql);

$affect=mysqli_affected_rows($conn);
echo"<br> Number of affected rows: $affect <br>";


if($result){

echo"Delete Successfully";
}else{

$err=mysqli_error($conn);
echo"Not Delete successfully due to this error --->$err";


}


?>