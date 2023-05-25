<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  echo castToDaysHoursMinutesSecunds(200000);

  function castToDaysHoursMinutesSecunds($seconds) {
    $date1 = new DateTime("@0");
    $date2 = new DateTime("@$seconds");
    return $date1->diff($date2)->format('%a дней, %h часов, %i минуты и %s секунд');
  }

?>

</body>
</html>
