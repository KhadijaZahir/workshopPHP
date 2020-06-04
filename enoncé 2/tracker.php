<?php
$name = $_GET["name"];
$weightKg = $_GET["weightKg"];
$heightCm = $_GET["heightCm"]; 

// localhost:8085/tracker.php?name=khadijaZahir&weightKg=50&heightCm=160
/* $name = 'andy';
$weightKg = 50;
$heightCm = 160; */
$heightMeters = $heightCm/100;
$heightSquared = pow($heightMeters, 2); //$heightMeters * $heightMeters;

$IMC = $weightKg/($heightSquared);
if ($IMC < 18.5) 
  {echo "<p>Hello $name, your IMC is $IMC you are underweight</p>";}

if($IMC >= 18.5 and $IMC < 24.9)
{echo "<p> Hello $name, your IMC is $IMC you are Healthy </p>";}

elseif($IMC >= 24.9 and $IMC < 30)
{echo "<p> Hello $name, your IMC is $IMC you have overweight </p>";}

elseif($IMC >= 30)
{echo"<p> Hello $name, your IMC is $IMC you have Suffering from Obesity </p>";}
?>
