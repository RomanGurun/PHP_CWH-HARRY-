<?php
echo"Welcome to tutorial 20 php";

echo"<br>";
$a=99;
function printvalue()
{
global $a; //GLOBAL keyword gives acces to the global variable
echo"The value of the variable is $a<br>";



}


printvalue();

echo"The value of the variable is $a<br>";
$a=808080;

echo"a=$a";


echo"<br>";
$b=10;
echo var_dump($GLOBALS["a"]);

echo"<br>";
echo var_dump($a);
echo"<br>";
echo var_dump($GLOBALS["b"]);
echo"<br>";




?>
