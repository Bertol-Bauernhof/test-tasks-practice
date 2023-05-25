<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php

  echo 'Дата начала недели: '. getStartAndEndDateOfWeek(2021, 12, 'END')."\n";
  echo 'Дата окончания недели: '. getStartAndEndDateOfWeek(2021, 12, 'START');

  function getStartAndEndDateOfWeek($year, $week, $start_or_end){
    $time = strtotime("1 January $year", time());
    $day = date('w', $time);
    $time += ((7*$week) + 1 - $day)*24*3600;

    if ($start_or_end == "START") {
      return date('Y-n-j', $time);
    } else {
      return date('Y-n-j', $time + (6*24*3600));  
    }  
}

?>
</body>
</html>
