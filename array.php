
  <?php
  $array = array("yuu", "tigon");

  //push item into end of an array
  $array[] = "nengg";

  for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " " . $i;
  }
  echo ("\n");
  //--------------------------------------------------------------------------------

  $matrix = array(
    array(1, 2, 3, 4, 5, 6, 7, 8, 9),
    array("test", "covid"),
    array(null, true, false)
  );
  for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
      echo $matrix[$i][$j] . " ";
    }
  }

  echo ("\n");
  //-------------------------------------------------------------------------------------
  $object = array(
    "us" => "United State",
    "vn" => "Vietnam",
    "cn" => "China",
  );
  foreach ($object as $key => $value) {
    echo $key . " " . $value . " || ";
  }
  echo ("\n");

  /*
  * ----------------------------------------------------------------------------------------
  * Method for array
  */
  is_array($array); // check is array ?
  count($array); //return array's lenght

  sort($array); //sort array abc or 123
  rsort($array); // sort array cba or 321
  arsort($array); // tăng dần
  arsort($array); //giảm dần

  //// find element in array
  in_array("tigon", $array); // => return index

  //find element in object
  array_key_last($object); // => return key
  array_key_first($object); //=> return key
  echo array_key_exists("vn", $object); //=> return index

  //remove element from array
  array_pop($array); // cuối mảng
  array_shift($array); // đầu mảng

  //special method
  $array = array(1, 2, 3, 4);
  echo ("\n");
  function sum($item)
  {
    return $item * 2;
  }
  $doubleArray =  array_map('sum', $array);
  foreach ($doubleArray as $item) {
    echo $item . " ";
  }

  echo ("\n");
  $input = array("oranges", "apples", "pears");
  $flipped = array_flip($input);
  print_r($flipped);
?>