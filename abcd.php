
<?php


// Connecting to the Database
$servername="localhost";
$username="root";
$password="";
$database="dbharry";

// create a connection
$conn=mysqli_connect($servername,$username,$password,$database);



// submit these to a database
if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}else

{   

    // $sql="INSERT INTO `phptrip` (`name`,`dest`) VALUES ('Roman','popoppo')";

$sql ="INSERT INTO `phptrip` (`SNO`, `NAME`, `DEST`) VALUES(1,'Roman','Dhading') ";

$result =mysqli_query($conn,$sql);

if($result){
echo"Connection successfully";
//   echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Success</strong> Your entry has been submitted 
//   successfully!
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';

}else{
  echo"The record was not inserted successfully because of this error---------->".mysqli_error($conn);
  // echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  // <strong>Error!</strong> We are facing some technical issue and your entry has not been submitted 
  // successfully! We regret the inconvinence caused!

  // <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  // </div>';



}
}