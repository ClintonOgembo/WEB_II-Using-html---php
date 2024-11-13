<?php
// 1. idexed-arrays: are linear 

// we use the array() function to create array
$marks = array(25,20,12,28,18);

// Traversing using for loop
for($i=0;$i<count($marks);$i++){
    echo "Mark $i= $marks[$i]<br>";
}
// Traversing using foreach loop
foreach($marks as $val){
    echo "Student marks, $val  marks<br>";
}

// index can be assigned automatically 
$names = array('Clinton','Jacob','Samuel','Faith');
echo "i like $names[2] and my name is $names[0]<br>";

// Or manually
$names[0] = 'OG';
$names[2] = 'Ann';
echo "i like $names[2] and my name is $names[0]<br>";

// 2. ASSOCIATIVE ARRAYS: are similar to indexed arrays but instead of
// linear storage , every value can be assigned with a user-defined key, which can either 
// be an integer or a string. value can be of any type.
$flowers = array("rose"=>"red","sun flower"=>"yellow","motia"=>"white");
foreach($flowers as $flower => $color){
    echo "$flower is $color"."<br>";
}
echo "<br>";

// 3. MULTIDIMENSIONAL ARRAYS: arrays that stores another array at each index instead of single element.
$records = array ( 
    array ("Asif","Assitant",25000),  
    array ("Nadeem","Accountant",3000), 
    array ("Farhan","Programmer",455000), 
    array ("Rashid","Operator",1000)
    );

echo "Name     :    Designation    : Salary <br>"; 
echo "================================<br>"; 
// accessing the elements
//echo $records[1][2];

for($row=0; $row<count($records); $row++){
    for($col=0; $col<3; $col++){
        echo $records[$row][$col].",";
    }
    echo "<br>";
}

// Multidimensional Arrays with associative array
$mark = array(  
    "Muhammad" => array ( 
       "physics" => 35, 
       "maths" => 30,  
       "chemistry" => 39 
    ), 
     
    "Nadeem" => array ( 
       "physics" => 30, 
       "maths" => 32, 
       "chemistry" => 29 
    ), 
     
    "Asif Khan" => array ( 
       "physics" => 31, 
       "maths" => 22,
       "chemistry" => 39 
       ) 
    ); 
     
    // Accessing multi-dimensional array values  
    echo "Marks for Muhammad : Physics  Maths and Chemistry <br> "; 
    echo $mark['Muhammad']['physics']   ." , " ; 
    echo $mark['Muhammad']['maths']     ." , " ; 
    echo $mark['Muhammad']['chemistry'] ." <br>"; 
     
    echo "Marks for Nadeem : Physics  Maths and Chemistry <br> " ; 
    echo $mark['Nadeem']['physics']    ." , " ; 
    echo $mark['Nadeem']['maths']      ." , " ; 
    echo $mark['Nadeem']['chemistry']  ."<br>"; 
     
    echo "Marks for Asif Khan: Physics  Maths and Chemistry <br> " ; 
    echo $mark['Asif Khan']['physics']   ." , "; 
    echo $mark['Asif Khan']['maths']     ." , "; 
    echo $mark['Asif Khan']['chemistry'] . "<br>"; 

// sorting the array
// sort() functin , elements in an array can be sorted in ascending orde either alphabetical or numerical
// rsort() functions orders elements in descending order.

$salary  = array (50000,40000,20000,30000,60000); 
echo "<br><u>Original Array values </u><br>"; 
       for ($m=0; $m<=4; $m++)  
       { 
               echo " Employee $m , and Salary is  $salary[$m] <br> " ; 
        } 
echo "<br><u>After Sorting Array in ascending order </u><br>"; 
sort($salary); 
       for ($i=0; $i<=4; $i++)  
       { 
               echo " Employee $i , and Salary is  $salary[$i] <br> " ; 
        } 
        
echo "<br><u>After Sorting Array in descending order </u><br>";        
rsort($salary); 
        for ($i=0; $i<=4; $i++)  
        { 
                echo " Employee $i , and Salary is  $salary[$i] <br> " ; 
         } 
        
/* Remove Element from Array
- The array_splice() function removes selected elements from an array and replaces it with new 
elements. The function also returns an array with the removed elements. 
*/
echo "<br>Remove element number 1, from array <br>"; 
$ColorNames = array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"purple"); 
echo "<br><u>Original array before removal..</u><br>";
print_r($ColorNames);
array_splice($ColorNames,0,1); 
echo "<br><u>New Array after Removal</u><br>";
print_r($ColorNames); 

echo "<br>Remove elements  from element number 1 to element number 2 in Array <br>"; 
$ColorNames = array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"purple"); 
array_splice($ColorNames,1,2); 
print_r($ColorNames); 


?>