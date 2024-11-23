<?php 
     $Dir="/xampp/htdocs";   // set specific path  
     $DirOpen =opendir($Dir);  //   open specific folder  
 
    $CurrentFile=readdir($DirOpen);  // read first . Directory 
    echo  $CurrentFile . "<br>"; 
 
    $CurrentFile=readdir($DirOpen);  // read second .. Directory 
    echo  $CurrentFile . "<br>"; 
 
    $CurrentFile=readdir($DirOpen);  // read first file or folder 
    echo  $CurrentFile . "<br>"; 
 
   $CurrentFile=readdir($DirOpen); // read second file or folder  
   echo  $CurrentFile . "<br>"; 
   closedir($DirOpen);   // close  current directory 
?>