<?php
$x = 75;
$y = 25;

 
function addition(){
    $GLOBALS['ben'] =  $GLOBALS['x'] + $GLOBALS['y'];
}


addition();
echo $ben;

?>