<?php 
$dir = 'Mywebfolder'; 
$directories = array(); 
$files_list  = array(); 
$files = scandir($dir); 
foreach($files as $file) 
{ 
   if(($file != '.') && ($file != '..')) 
   { 
        if(is_dir($dir.'/'.$file)) 
        { 
           $directories[]  = $file; 
        }else 
       { 
         $files_list[]    = $file; 
       } 
   } 
} 
foreach($directories as $directory) 
{ 
   echo '<li style="color:blue">'.$directory.'</li>'; 
} 
foreach($files_list as $file_list) 
{ 
   echo '<li>'.$file_list.'</li>'; 
} 
?>