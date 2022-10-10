<?php 
$cars = array("Volvo", "BMW", "Toyota", "BenZ");

foreach($cars as $car){
    echo $car;
    echo '<br>';

} 


echo '<br>';



$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
echo $arrlength;

?>