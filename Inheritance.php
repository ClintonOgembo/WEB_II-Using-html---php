<?php
class Human  
{ 
    public $name;
    
    // Constructor
    function __construct($name = "nothing") { 
        $this->name = $name; 
    } 

    public function speek($string) { 
        echo $this->name . " speek in  " . $string .   "<br>"; 
    } 

    public  function walk($string ) 
   { 
         echo  $this->name . " Walk " . $string . "<br>"; 
    } 
} 

class Animal extends Human 
{ 
   public function eat($string) { 
        echo $this->name . " eat  " . $string .   "<br>"; 
   } 
}

$clin = new Human("Clinton");  // call constructor by Human/Super  class!" 
$clin->speek("English"); //   call speek function by Human/Super  class!" 
$clin->walk("by two legs");//   call walk function by Human/Super  class!" 
$dog = new Animal("Dog");   // call constructor by Human/Super  class!" 
$dog->speek("Bark"); //   call speek function by Human/Super  class! " 
$dog->walk(" by Four legs");  //call walk function by Human/Super  class! 
$dog->eat("meat"); //call walk function by Animal/derived class!

?>