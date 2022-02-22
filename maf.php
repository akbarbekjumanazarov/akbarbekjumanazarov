<?php
$student = array("Color" => "Red", "Name" => "Maftuna", "Age" => "21", "Id" => "U1810000");
echo "<ul>";
foreach ($student as $key => $value) {
  echo "<li>$key  $value</li>";
}
