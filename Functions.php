<?php

// Function with no arguments and no return value.
function line(){
    for($i=0;$i<=25;$i++){
        echo "-";
    }
    echo "<br>";
}
line();
echo "Computer System <br>";
line();

// function with arguments and no return value
function familyName($fname,$year) {    
        echo "$fname  Born in $year <br>"; 
    } 

familyName("Clinton ", 2003); 
familyName("Samuel ", 2010); 
familyName("Joyce", 2012); 

// functions with arguments and return value
$m=24;
$n=12;
echo " <u>Result from, call add function</u>  <br>"; 
$z = add( $m, $n);       //function call ,the return value of function will stored to z 
echo "Result  $z <br>";   // result of function will display here 
function   add( $m,  $n){  
    $result = $m + $n; 
      return  $result; 
    } 

// functions with no arg but return value 
$p = pivalue();        //function call ,the return value of function will stored to p 

echo "PI value is $p <br>";// result of function will display here 

function pivalue(){ 
   return 3.142; 
   } 
// local variable declared within a function and has its scope only in that particular function.
// Global variables declared outside a function. can be accessed directly outside a function. 
// To access Global variable we use the KEYWORD "global" before the variable.

$r=8;
function myNumber(){
    global $r;  // local scope/ variable
    echo "<br>Variable r value print, inside function is: $r <br>";
}
myNumber();  // call myNumber

// outside the function
echo "<br>Variable x outside function is: <br>".$r;

// RECURSIVE:
// this is a function that calls itself again and again until some test pattern remain true.
// RECURSION : is the process.

function sum($j){
    $l;
    if($j==0)
        return 0;
    else
        $l = $j + sum($j-1);
            return $l;
}
$v = sum(10);
echo "<br>Sum : $v";

?>