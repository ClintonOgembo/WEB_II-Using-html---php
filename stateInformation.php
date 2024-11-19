<?php
// information about individual visit to a website is called state information.
/*
The following example starts a session then
register a variable called counter that is incremented 
each time the page is visited during the session.  
**/
session_start(); 
// Make use of isset() function to check if session variable is already set or not. 
if( isset( $_SESSION['counter'] ) )  
{ 
       $_SESSION['counter'] += 1; 
}else  
{ 
          $_SESSION['counter'] = 1; 
} 

$msg = "You have visited this page ".  $_SESSION['counter']  . " in this session" ; 
echo $msg; 

?>