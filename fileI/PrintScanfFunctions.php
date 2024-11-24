<?php 
 
// fwrite() function
$filehandler = fopen("mytextfile.txt","w"); 
fwrite($filehandler, "This is a  String !"); 
echo “String has been saved in mytextfile.txt<br>”; 
fclose($filehandler);

//Append data to a binary file using fwrite() 
$filehandler = fopen("mytextfile.txt","a"); 
fwrite($filehandler, "Append new   String !"); 
echo "Append more string has been saved in <b>mytextfile.txt </b> <br>"; 
fclose($filehandler);

// fread() function
$filehandler = fopen("mytextfile.txt","r"); 
echo fread($filehandler,filesize("mytextfile.txt"));   // read entire file contents. 
fclose($filehandler); 

// read 10 characters only
$filehandler = fopen("mytextfile.txt","r"); 
echo fread($filehandler,"10"); 
fclose($filehandler); 

// getc() function 
$filehandler = fopen("mytextfile.txt","r"); 
echo fgetc($filehandler);      // only read one character from mytext.txt file.
fclose($filehandler); 

// printf() function
$code = 12; 
$name = "Muhammad"; 
$salary =45000; 
$filehandler = fopen("mydatatext.txt","w"); 
fprintf($filehandler, "%u  %s %u\n" , $code, $name, $salary); 
echo "Information has been saved in mydatatext.txt file<br>"; 
fclose($filehandler); 

// scanf() function 
$filehandler = fopen("mydatatext.txt", "r"); 
while ($userinfo = fscanf($filehandler, "%u %s %u\n")) 
{ 
list ($code, $name, $salary) = $userinfo; 
echo "$code  : $name :  $salary  <br>"; 
} 
fclose($filehandler); 
?>