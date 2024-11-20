<?php  
class ClassName  
{ 
    function __construct() 
    { 
        echo "In constructor <br>"; 
    } 
 
    function __destruct() 
   { 
        echo "Destroying " . __CLASS__ . "<br>"; 
    } 
} 
 
$obj = new ClassName(); 
?> 