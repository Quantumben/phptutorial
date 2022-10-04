<?php
$arr = ['Item 1', 'Item 2', 'Item 3'];

foreach ($arr as $ben) {
//   var_dump($ben);
echo $ben;
echo '<br>';
}

$dict = array("key1"=>"35", "key2"=>"37", "key3"=>"43");

foreach($dict as $key => $val) {
  echo "$key = $val<br>";
}

// echo '<br>';

// foreach($dict as $key) {
//     //var_dump($key);
//     echo $key[0];
//   }

?>