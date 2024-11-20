<?php 
class Students { 
// Member variables  
private  $roll; 
public $name; 
public $age; 

//  Constructor of class  
function __construct($roll=0,$name="nothing", $age=0) { 
    $this->roll = $roll; 
    $this->name = $name; 
    $this->age = $age; 
} 

// Member functions  
function setRoll($roll){ 
    $this->roll = $roll; 
} 

function getRoll(){ 
    return $this->roll; 
}

function setName($name){ 
    $this->name = $name; 
}

function getName(){ 
    return $this->name ; 
} 

function setAge($age){ 
    $this->age = $age; 
}

function getAge(){ 
    return $this->age ; 
}
}


$Student1 = new Students(); 
$Student2 = new Students(); 

$Student1->setRoll(123); 
$Student1->setName("Muhammad Ali"); 
$Student1->setAge(19);
$Student2->setRoll(141); 
$Student2->setName("Ahmed Farooqi"); 
$Student2->setAge(19); 

//#Now you call another member functions to get the values set by in above example 
echo "Roll number is....:  " . $Student1->getRoll() ."<br>"; 
echo "Name is ......... :  " . $Student1->getName() ."<br>"; 
echo "Age is .......... :  " . $Student1->getAge()  ."<br>";  
echo "Roll number is....:  " . $Student2->getRoll() ."<br>"; 
echo "Name is ......... :  " . $Student2->getName() ."<br>"; 
echo "Age is .......... :  " . $Student2->getAge()  ."<br>";
 
?>