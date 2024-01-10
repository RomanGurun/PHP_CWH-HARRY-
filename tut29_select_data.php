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

$sql="SELECT * FROM `phptrip`";
$result=mysqli_query($conn,$sql);

// find the number of recors returned
$num = mysqli_num_rows($result);
echo $num;
echo" record found in the database.";
echo"<br>";

// Display the rows returned by the sql query
if($num>0){
// $row=mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo"<br>";

// $row=mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo"<br>";
// $row=mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo"<br>";
// $row=mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo"<br>";
// $row=mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo"<br>";

// We can fetch in a better way using the while loop

while($row=mysqli_fetch_assoc($result)){

// echo var_dump($row);

// echo $row['SNO'] ."Hello" .$row['name'] ."Welcome to" .$row['dest'];
        //  ==============================table key is case sensitive ==============================

echo $row['SNO'] .". Hello " .$row['NAME'] ." Welcome to" .$row['DEST'];

echo"<br>";






}


}