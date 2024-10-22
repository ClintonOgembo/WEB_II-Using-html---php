<?php

$math = $_POST['math'];
$eng = $_POST['eng'];
$chem = $_POST['chem'];
$kisw = $_POST['kisw'];
$bio = $_POST['bio'];


$avg = ($math + $eng + $chem + $kisw + $bio)/5;

switch ($avg) {
    case ($avg >= 80):
        echo 'Grade is A';
        break;
    case ($avg >= 60):
        echo 'Grade is B';
        break;
    case ($avg >= 50):
        echo 'Grade is C';
        break;
    default:
        echo 'grade is D';
}

echo "<br>";

$age = 25;

$rea = $age >= 18? "adult":'kid'; // if age is great than / equal to 18 print adult otherwise print kid
echo $rea;

?>