
<?php

  function add($number1, $number2, $number3){
    echo ($number1 + $number2 + $number3);
  }
  add(5, 6, 7);
  echo ("\n");

  // arrow functions in php so dumb
  $devider = fn($num1, $num2) => $num1/$num2;
  echo $devider(3,2);
  echo ("\n");

  //work with date
  echo date("Y-m-d H:i:s" . "\n");
  echo date("Y-m-d" . "\n");
  echo date("m-d" . "\n");
?>