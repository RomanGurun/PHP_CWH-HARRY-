<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach Loops in php</title>
</head>
<body>
    
<h1>Welcome to the world of foreach loops</h1>
<?php
//  $fruits=['banana','apples','harpics','bread'];
 $fruits =array('banana','apples','harpics','bread');
 $i=0;
for($i;$i<count($fruits);$i++){

echo"$fruits[$i]";

echo"<br>";
}

// Better way to do this - foreach Loops
// foreach($fruits as $value){
//     echo"$value <br>";

// }



?>
</body>
</html>