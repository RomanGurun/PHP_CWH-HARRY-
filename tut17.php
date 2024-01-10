<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Date =</h1> 
<?php
// $date= date('d j l');
// $date=date('dS F Y');
$date=date("dS F Y,g:i A");
echo"Todays date is $date <br>";


$ram=date('1js \of F Y h:i:s A');
echo"$ram";
echo"<br>";

// prints something like: Monday 8th of August 2005 03:12:45 PM
echo date('1js \of F Y h:i:s A');

$year=date("Y");
echo"<br>";
echo"Copyright $year | All rights reserved <br>"


?>


















</body>
</html>