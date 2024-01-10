<?php 

$fptr=fopen("myfile.txt","r");
// echo var_dump($fptr);

// while($fptr){

  
// echo fgets($fptr);  
// }


// echo fgets($fptr);
// fgets function read a one line only..........
// echo "<br>".fgets($fptr);
// echo "<br>".fgets($fptr);
// echo "<br>".fgets($fptr);
// echo "<br>".var_dump(fgets($fptr));

// Reading a file line by line

// while($a=fgets($fptr))
// {
// echo $a;
// }

// echo "End of the file has been reached.";


// Reading a file character by character

/*
echo fgetc($fptr);
while($a=fgetc($fptr))
{
echo $a;
break;
// jab samma specific character aundaina taba samma check garna man xa bhane use fgetc()
// function 


}

echo "End of the file has been reached.";
*/


// Write a program which reads the content of a file until . has been encountered
while($a=fgetc($fptr)){


echo $a;
if($a== "f"){
    break;

}

}

fclose($fptr);



?>