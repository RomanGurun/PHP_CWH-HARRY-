<?php 

$income=2000;


/*
php data types
1.String
2.Integer
3.Float
4.Boolean
5.Object
6.Array
7.NULL
*/
//String -sequence of characters

$name="Harry";
$friend="Roman";
echo"$friend friend is $name <br>";




// Integer - Non decimal number
// Integer ranges from 32323 to -32323 (assumption)
$income =455;
$debts = -65;

echo" icome is
$income ; and debt is
$debts
" ;


// Float - Decimal point Number

$income=344.5;
$debts=-45.5;
echo"<br>";

echo"$income";
echo"<br>";
echo"$debts";


// Boolean can be either true or false
$x=true;
$is_frined=false;

echo"<br>";
echo var_dump($x);
// var_dump() is a function tells variable datatype and a value.

echo"<br>";
echo var_dump($is_frined);


// Object - Instances of classes
// Employee is a class harry can be object



///Array - used to store multiple values in a single variables

$friends = array("rohan","shubam","skillf","larry");

echo"<br>";
echo var_dump($friends);
echo"<br>";
echo "$friends[0]";
echo"<br>";

echo "$friends[1]";
echo"<br>";

echo "$friends[2]";
echo"<br>";

echo "$friends[3]";
echo"<br>";


///echo "$friends[4]"; ///will throw an error as the size of array is 4;

//NULL
$name = NULL;
echo"<br>";
//echo"$name"; //wont show if var_dump is not used
echo var_dump($name);



?>