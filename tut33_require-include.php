!
<?php
// include '_dbconnect.php';
require '_dbconnect.php';
// require lya agadi badna didaina show fatal  error but include doesnot do soooo.

echo 'This';

$sql="SELECT * FROM `phptrip`";
$result=mysqli_query($conn,$sql);

// find the number of recors returned
$num = mysqli_num_rows($result);
echo $num;
echo" record found in the database.";
echo"<br>";

// Display the rows returned by the sql query
if($num>0){
while($row=mysqli_fetch_assoc($result)){
echo $row['SNO'] .". Hello " .$row['NAME'] ." Welcome to" .$row['DEST'];
echo"<br>";

}

}

?>