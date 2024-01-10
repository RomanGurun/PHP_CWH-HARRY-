<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>






<?php
$arr=array('this','that','what');

echo $arr[0];
echo $arr[1];
echo $arr[2];

// Associative array bhaye key jasari key enter garnu parxa in array.
$arr=array('Roman',"Sam"=>"Bahadur","Ram"=>"Malla",9=>"Nine",'p'=>"Pa");

// echo($arr['Roman']);
echo"<br>";
echo ($arr[0]);
echo"<br>";
// echo($arr[9]); //below and this is same
echo($arr[9]); 
echo"<br>";
echo($arr['p']);

foreach($arr as $key=>$value){

echo"<br>The associative of $key is $value";

}




?>





</body>
</html>