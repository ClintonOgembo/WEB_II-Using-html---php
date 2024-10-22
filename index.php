<?php
$name = "Clinton Jacob";
$age = 2;
$sales = 535426;

echo $name;
echo '<br>';
echo $age;
echo '<br>'; // Added missing semicolon
echo "Clinton after 5 years will be " . ($age + 5) . " years old"; // Correct concatenation and parentheses for calculation

#Order of precedence
echo '<br>';
echo "The result " . ( (2+2) * 2);
echo '<br>';
echo "The result " . ( 2 + (2 / 3) % 2);

#PEDMAS
$y=2;
$z=5;
$a=2;
echo '<br>';
echo "The result " . ($y+$z*$a);
echo '<br>';
$res = (( $y + ($z * ($a / $z) )) - $y) % 2;
echo "The result of PEDMAS is " .$res;
echo '<br>';
echo '<br>';

#Relational operators
if($age >= 18){
    echo "$name is an adult";
    return;
} 
    
echo "$name is a child";
echo '<br>';

if($sales >= 200000)
    $comm = $sales * 0.1;
else
    $comm = $sales * 0.05;

echo "$name's commission is ".$comm;
echo "<br>";
echo "<br>";

echo "$name did the following Subjects ;<br> Mathematics = 74, Eng = 64, Kisw = 80, Bio = 76, Phy = 74";
echo "<br>";

$Math = 74;
$Eng = 64;
$Kisw = 80;
$Bio = 76;
$Phy = 74;
$No_of_subjects = 5;

$total = ($Math + $Eng + $Kisw + $Bio + $Phy);
echo "The total marks is ".$total;
echo "<br>";

$average = ($Math + $Eng + $Kisw + $Bio + $Phy) / $No_of_subjects;
echo "The average is ".$average;
echo "<br>";
echo "<br>";

if($average >= 70)
    echo "$name you have an A";

else if($average >= 60)
    echo "$name you have a B";

else if($average >= 50)
    echo "$name you have a C";

else 
    echo "$name you have a D";
?>