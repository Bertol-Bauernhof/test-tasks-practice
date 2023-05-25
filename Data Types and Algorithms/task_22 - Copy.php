<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $numbers_range = array(30, 20, 50, 10, 70, 45);
  $MIN_NUMBER = 10;

  printNearestNumber(25, $numbers_range);
  printNearestNumber(10, $numbers_range);
  printNearestNumber(5, $numbers_range);
  printNearestNumber(50, $numbers_range);
  printNearestNumber(40, $numbers_range);
  printNearestNumber(38, $numbers_range);

  function printNearestNumber($number) {
    global $numbers_range, $MIN_NUMBER;
    $nearest_lesser_number = getNearestLesserNumber($number, $numbers_range);

    if ($nearest_lesser_number < $MIN_NUMBER) {
      echo "Введите число не менее ".$MIN_NUMBER."!";
    } else { 
      echo $number." : больше чем ".$nearest_lesser_number;
    }  
  }

  function getNearestLesserNumber($number, $numbers_range) {
    $numbers_range = rsort($numbers_range);

    for ($i = 0; $i < count($numbers_range); $i++) {
      if ($number < $numbers_range[$i]) { 
        return prev($numbers_range);
      }
    }
    return $number;
  }
?>
</body>
</html>

