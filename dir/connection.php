<?php


// $username="localhost";
// $name="root";
// $password="";
// $db="contacts";


// $conn=mysqli_connect($username,$name,$password,$db);

// if($conn){
//     // echo"connection established";
// }else{

//     echo mysqli_connect_error();
// }


$db_name='mysql:host=localhost;dbname=contacts';
$user_name='root';
$user_password='';
$conn=new PDO($db_name,$user_name,$user_password);


///////////////////true or false
if(!$conn){
echo"did not connect to database";
}





?>