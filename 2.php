<?php
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}
function multiply(int $x, int $y) {
  $z = $x * $y;
  return $z;
}
function subtraction(int $x, int $y) {
  $z = $x - $y;
  return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "4 * 3 = " . multiply(4, 3) . "<br>";
echo "10 - 5 = " . subtraction(10, 5) . "<br>";
?>