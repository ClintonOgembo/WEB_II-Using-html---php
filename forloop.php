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

// $num1 = $_GET['num1'];
// $num2 = $_GET['num2'];

// $sum = 0;

// for($num1; $num1>=$num2;$num1-=2){

//     $sum += $num1;
// }

// echo $sum.' ';

//multiples of 10 using conditional statements
// for($i=790;$i>=590;$i--){
//     if($i % 10 == 0){
//         echo $i, ' ';
//     }
// }
// echo "<br>";
// echo "<br>";

// //write a program that will sum multiples of 25 btwn 1 and 1000
// $sum=0;
// for($i=1;$i<=1000;$i++){
//     if($i % 25 == 0){
//         $sum += $i;
//     }
// }
// echo $sum;

//nested for loops
// for($i=1;$i<10;$i++){
//     echo ("<p>");
//     //echo $i;

//     for($j=1;$j<10;$j++){

//         echo $i * $j, ' ';
//     }
// }

// //print a triangle
// for($i=1;$i<=5;$i++){
//     echo ("<p>");
//     //echo $i;

//     for($j=0;$j<$i;$j++){

//         echo'*';
//     }
// }

//print a inverted triangle
// for($i=5;$i>=0;$i--){
//     echo ("<p>");
//     //echo $i;

//     for($j=1;$j<=$i;$j++){

//         echo'*';
//     }
// }

//while loop

// $i=1;
// while($i<=10){
//     echo $i,' ';
//     $i+=1;
// }

//even numbers btwn 20-30
// $i=20;
// while($i<=30){
//     echo'The even number is ' .$i,' ';
//     $i+=2;
//     echo '<br>';
// }

//sum of even numbers btwn 20-30
// $i=20;
// $sum = 0;
// while($i<=30){
//    // echo $i,' ';
//    $sum+=$i;
//     $i+=2;
// }
// echo $sum;

// $a=5;
// while($a<=50){
//     if($a % 5==0){
//         echo $a,' ';
//     }
//     $a+=1;
// }

// MULTIPLES OF 30 FROM 900-100
// $a=900;
// while($a>=100){
//     if($a % 30==0){
//         echo $a,' ';
//     }
//     $a-=1;
// }

//create html form that will populate a list box with values between 20 and 100 and when the user clicks on the button 'populate'

$a=5;
do {
    echo "$a ";
    $a += 5;
} 
while($a<=50);

?>