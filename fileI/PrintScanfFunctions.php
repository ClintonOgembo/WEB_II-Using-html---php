<?php 
// printf function
$code = 12; 
$name = "Muhammad"; 
$salary =45000; 
$filehandler = fopen("mydatatext.txt","w"); 
fprintf($filehandler, "%u  %s %u\n" , $code, $name, $salary); 
echo "Information has been saved in mydatatext.txt file<br>"; 
fclose($filehandler); 

// scanf function 
$filehandler = fopen("mydatatext.txt", "r"); 
while ($userinfo = fscanf($filehandler, "%u %s %u\n")) 
{ 
list ($code, $name, $salary) = $userinfo; 
echo "$code  : $name :  $salary  <br>"; 
} 
fclose($filehandler); 
?>