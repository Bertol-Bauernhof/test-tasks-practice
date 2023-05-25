<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $start_date = new DateTime('first day of this month - 6 months');
  $end_date   = new DateTime('last month');
  $difference  = new DateInterval('P1M'); 

  $period = new DatePeriod($start_date, $difference, $end_date);

  foreach($period as $dates) {
    echo $dates->format('F')." ";
  }
?>

</body>
</html>