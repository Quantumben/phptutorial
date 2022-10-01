<?php
  
  /* Operators are used to perform operations on variables and values
  PHP many types of operators:
  Arithmetic operators
  Assignment operators
  Comparison operators
  Increment/Decrement operators
  Logical operators
  String operators
  Array operators
  Conditional assignment operators
  */
  
  $x = 24;  
  $y = 3;
  
  #Arthimetic Operators
  
  #The PHP arithmetic operators are used with numeric values to perform common arithmetical operations.

  echo $x + $y . " this is addition <br>";
  echo $x - $y . " this is subtraction <br>";
  echo $x * $y . " this is multiplication <br>";
  echo $x / $y . " this is division <br>";
  echo $x % $y . " this is modulus <br>";
  echo $x ** $y . " this is exponentation <br>";

  #Assignment Operators

  echo $x = $y . " this is the same as x = y <br>";
  echo $x += $y . " this is the same as x = x + y <br>";
  echo $x -= $y . " this is the same as x = x - y <br>";
  echo $x *= $y . " this is the same as x = x * y <br>";
  echo $x /= $y . " this is the same as x = x / y <br>";
  echo $x %= $y . " this is the same as x = x % y <br>";
    
  #Comparison Operators
    
  echo $x == $y . " this returns true if x is equal to y <br>";
  echo $x === $y . " this returns true if x is equal to y and they are of the same type <br>";
  echo $x != $y . " this returns true if x is not equal to y <br>";
  echo $x <> $y . " this also returns true if x is not equal to y <br>";
  echo $x !== echo $x = $y . " this returns true if x is not equal to y, or they are not of the same type <br>";
  echo $x > $y . " this returns true if x is greater than y <br>";
  echo $x < $y . " this returns true if x is less than y <br>";
  echo $x >= $y . " this returns true if x is greater than or equal to y <br>";
  echo $x <= $y . " this returns true if x is less than or equal to y <br>";
  echo $x <=> . " this returns an integer less than, equal to, or greater than zero, depending on if x is less than, equal to, or greater than y. Introduced in PHP 7. <br>";
  
  #Increment/Decrement operators
    
  echo ++$x . " this increments x by 1 and then returns x <br>";
  echo $x++ . " this returns x and increments x by 1 <br>";
  echo --$x . " this decrements x by 1 and then returns x <br>";
  echo $x-- . " this returns x and decrements x by 1 <br>";
  
  #Logical Operators
    
  $a = $x >= $y
  $b = $x <= $y
  
  echo $a and $b . " this returns true if both, a and b are true <br>";
  echo $a or $b . " this returns true if either of them (or both) are true <br>";
  echo $a xor $b . " this returns true if either of them are true, but not both";
  echo $a && $b .  " this returns true if both, a and b are true <br>";
  echo $a || $b . " this returns true if either of them are true <br>";
  echo !$b . " this returns true if b is not true <br>";

  #String operators

  $text1 = "Sharp";
  $text2 = "Nails";
    
  echo $text1 . $text2 . " this adds text1 before text2 <br>";
  echo $text1 .= $text2 . " this appends text2 to text1"

  #Array operators
    
  $polygons = array("pentagon","hexagon","heptagon")
  $polygons1 = array("octagon","nonagon","decagon")
    
  print_r($polygons+$polygons1); #This appends polygons1 to polygons

  var_dump($polygons == $polygons1); #This returns true if polygons and polygons1 have the same key/value pairs in the same order and of the same types
  
  var_dump($polygons != $polygons1); #This returns true if polygons is not equal to polygons1
  var_dump($polygons <> $polygons1); #This returns true if polygons is not equal to polygons1

  var_dump($polygons !== $polygons1); #This returns true if polygons is not identical to polygons1
  
  #Conditional Assignment Operators

   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo(" when empty(user) is true, status is set to anonymous, when empty(user) is false, status is set to logged in<br>");

   $user = "Rick Astley";
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo "<br>"
     
   echo $user = $_get["user"] ?? "anonymous";
   echo(" the value of user is _get['user'] if _get['user'] exists, and is not NULL. If _get['user'] does not exist, or is NULL, the value of user is anonymous.<br>");
  

//    x == y !=	y == x
?>