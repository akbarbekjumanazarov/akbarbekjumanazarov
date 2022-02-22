<?php
$number = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
echo 'Original array :';
echo "<br>";
foreach ($number as $x) {
  echo "$x ";
}
$inserted = '$';
echo "<br>";
array_splice($number, 6, 0, $inserted);
echo " \n After inserting '$' the array is ";
echo "<br>";
foreach ($number as $x) {
  echo "$x ";
}
echo "\n";
