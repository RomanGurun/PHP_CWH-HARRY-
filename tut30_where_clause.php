<?php

// connecting too the Database
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


$sql="SELECT * FROM `phptrip` WHERE `dest`='Dhading'";

$result=mysqli_query($conn,$sql);

// find the number of recors returned
// Usage of where Clause to fetch data from the database

$num = mysqli_num_rows($result);
echo $num ." record found in the database. <br>";
// Display the rows returned by the sql query
$no=1;    
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
    
    echo $no .". Hello " .$row['NAME'] ." Welcome to" .$row['DEST'];
    
    echo"<br>";
    
    $no=$no+1;
    
    
    }
    

}

// Usage of WHERE Clause to Update Data
// $sql="UPDATE `phptrip` SET `name` = 'RohanUpdated' where `sno`=4";
$sql="UPDATE `phptrip` SET `name` = 'DAN' where `DEST`='Dhading' LIMIT 2 ";

$result=mysqli_query($conn,$sql);

echo var_dump($result)."<br>";


$affect =mysqli_affected_rows($conn);
echo" Number of affected rows:$affect <br>";



if($result){


echo"We updated the record Successfully";

}else{
echo"We couldnot updated the record successfully.";

}

?>