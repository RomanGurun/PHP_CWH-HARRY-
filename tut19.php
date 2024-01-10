<?php
echo"Welcome to multi dimensional array in php <br>";

$arr =array(array(2,5,7,8),

array(3,5,8,9),
array(1,5,7,9));

echo var_dump($arr);

// echo $arr[0][0];
// echo"<br>";
// echo $arr[0][1];
// echo"<br>";
// echo $arr[0][2];
// echo"<br>";
// echo $arr[0][3];
// echo"<br>";

for($i=0;$i<count($arr);$i++){

echo var_dump($arr[$i]);


}

echo"<br>";

for($i=0;$i<count($arr);$i++){
for($j=0;$j<count($arr[$i]);$j++){
// $arr[$i] =count(arr[0]) lenghth is 4;

// $arr[$i] =count(arr[1]) lenghth is 4;


echo $arr[$i][$j];
// this do 0 1,2,3,4 value
// this do 1 1,2,3,4 value
echo" ";
    // echo var_dump($arr[$i]);
    
}    
echo"<br>";
}
    
?>