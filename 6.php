<?php

function greet($count){ 
  $count--;
  $sum = 0;
  for ($i = 1; $i <= 5; $i++) {
       $sum += $i;
     }
  echo "1+2+3+4+5" .  " = " . $sum; 
  if ($count!=0){
  greet($count);
 }
}
greet(1);
 
?>
