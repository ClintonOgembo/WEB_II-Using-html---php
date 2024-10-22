<?php

// for($i=0; $i<=10;$i++){
//     echo $i.' ';
// }

// for($i=0; $i<=10;$i++){
//     $power = ($i**2);
//     echo $i.' The power of '.$i.' is '.$power.'<br>';
// }
//output the power of numbers from 1-10

// for($i=0; $i<=10;$i+=2){
//     $power = ($i**2);
//     echo $i.' The power of '.$i.' is '.$power.'<br>';
//     }
//outputs the power of even numbers from 1-10

// for($i=21; $i<=100;$i+=2){
//     $power = ($i**2);
//     echo $i.' The power of '.$i.' is '.$power.'<br>';
// }
//outputs power of odd numbers from 20-100

// for($i=20; $i<=100;$i+=5){
//     $power = ($i**2);
//     echo $i.' The power of '.$i.' is '.$power.'<br>';
// }
// outputs the multiples of 5 from 20-100

// $num1 = $_GET['num1'];
// $num2 = $_GET['num2'];

// for($num1; $num1>=$num2;$num1-=2){
//     echo $num1.' ';}

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$sum = 0;

for($num1; $num1>=$num2;$num1-=2){

    $sum += $num1;
}

echo $sum.' ';


?>