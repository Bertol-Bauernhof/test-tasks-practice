<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $date = '2037-09-06';

  echo isWeekend($date);

  function isWeekend($date) {
    $temp = strtotime($date);
    $cast_to_weekday = date("l", $temp);
    $checked_day = strtoupper($cast_to_weekday);
  if(($checked_day == "SATURDAY" ) || ($checked_day == "SUNDAY"))
      return "true";
  else 
      return "false";
  }
?> 

</body>
</html>
