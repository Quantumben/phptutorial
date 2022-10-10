<?php
function familyName($fname, $year, $country = null) {
  echo "$fname Refsnes. Born in $year <br> $country <br>";
}

familyName("Hege", "1975", 'Nigeria');
familyName("Stale", "1978", 'Ghana');
familyName("Kai Jim", "1983");

?>