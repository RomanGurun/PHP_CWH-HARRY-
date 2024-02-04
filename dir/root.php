<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
body{
    background-color:blue;
}
.container{
    display:flex;
border:solid 2px green;
padding:20px;
justify-content:center;
align-items:center;
border-radius:8px;
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);


}
form{
    width:60%;
    border-radius:24px;
    /* text-align:center; */
border:solid 5px black;
padding: 40px;

}
form .input,label {
    width::100%;
    font-weight:bold;
color:green;
outline:none;
background-image: url("img_tree.gif"), url("paper.gif");



}
button{
    margin: 5% 35%;
border-radius:10px;
cursor:pointer;
transition:background-color 1s;
}

button:hover{
    background-color:green;
}
input,textarea,button{
    box-shadow: 3px 3px;
    font-size:18px;
color:blue;
font-weight:900;
}
form .input input,textarea,label{
    width:90%;
     padding: 10px;
    outline:none;
    border-radius:20px;
    

  margin: 0px auto;
    display:block;
}

</style>

<?php
include 'connection.php';
?>

<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){

// $name=$_POST['name'];
// $email=$_POST['email'];
// $concern=$_POST['concern'];
// $date=$_POST['dt'];
// $sn=90;


// $delete_product = $conn->prepare("INSERT INTO `contactus22` (`sno`,`name`,`email`,`concern`,`dt`) VALUES(?,?,?,?,?)");
// $delete_product->execute([$sn,$name,$email,$concern,$sn]);

// // $sql="INSERT INTO `contactus22` (`sno`,`name`,`email`,`concern`,`dt`) VALUES('','$name','$email','$concern',current_timestamp())";
// // $result=mysqli_query($conn,$sql);

// if($delete_product==true){
//     echo" <script> confirm('form submitted successfully'); </script>";

// }else{
//     echo" <script> alert('form fail to submit'); </script>";
// }





// }



// chatgpt
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $concern = $_POST['concern'];
    $date = $_POST['dt'];
    $sn = 39;

    // Use prepare on $conn
    $insert_contact = $conn->prepare("INSERT INTO `contactus22` (`sno`,`name`,`email`,`concern`,`dt`) VALUES(?,?,?,?,?)");
    $insert_contact->execute([$sn, $name, $email, $concern, $date]);

    if ($insert_contact == true) {
        // echo "<script> confirm('Form submitted successfully'); </script>";

        echo"good";
    } else {
        echo "<script> alert('Form failed to submit'); </script>";
    }



    $select_contact =$conn->prepare("SELECT * FROM `contactus22` WHERE sno=?");
    $select_contact->execute([$sn]);
    




    if($select_contact->rowCount() > 0) {
        $fetch_contact = $select_contact->fetch(PDO::FETCH_ASSOC);
        
    echo $fetch_contact['email']." is fetched";
    
    
    
    
    
    
        
    }

}

?>



</head>
<body>
    
<div class="container">
<form action="" method="post">

<div class="input">
<label for="">Enter your name:</label>
<input type="text" name="name" id="" required>
</div>

<div class="input">
<label for="">Enter your email:</label>
<input type="email" name="email" id="">
</div>
<label for="">description:</label>
<div class="input">
<textarea name="concern" id=""></textarea>
</div>

<div class="input">
<label for="">Enter date:</label>
<input type="date" name="dt" id="">
</div>






<button type="submit">Register</button>

</form>






</div>




</body>
</html>