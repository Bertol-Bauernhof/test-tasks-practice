<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $date = '2005-02-01';

  addDays($date, 40);
  substractDays($date, 40);

  function addDays($date, $number) {
    $add_days = strtotime("+".$number." days", strtotime($date));
    echo "Через $number дней: " . date("Y-m-d", $add_days)."\n";
  }  

  function substractDays($date, $number) {
    $sub_days = strtotime("+".$number." days", strtotime($date));
    echo "До $number дней: " . date("Y-m-d", $sub_days)."\n";
  }
?>
</body>
</html>
