<?php
echo"Welcome to PHP Connectivity <br>";


$servername = "localhost";
$username = "root";
$password = "";
$database="dbroman";
// Create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to conect". mysqli_connect_error());
}else{
    echo"Connection was successful <br>";
}


// Create a table
$sql="CREATE TABLE `phptrip` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) NOT NULL , `Dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`sno`))";
$result=mysqli_query($conn,$sql);


// Check for the table creation success
if($result){

echo"The table was created successfully!<br>";

}else{

    echo"The table was not created successfully because of this error ---->".mysqli_error($conn);

}

echo"The result is <br>";
echo var_dump($result);
echo"<br>";



?>