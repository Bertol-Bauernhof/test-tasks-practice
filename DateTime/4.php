<!DOCTYPE html>
<html>
 <head>
   <title>T11</title> 
 </head>
<body>

<?php
$NUMBER_SECS_IN_YEAR = 365*60*60*24;
$start_date = "1980-11-04";
$end_date = "2021-04-04";

$difference = abs(strtotime($end_date) - strtotime($start_date));

$years = floor($difference / $NUMBER_SECS_IN_YEAR);
$months = floor(($difference - $years * $NUMBER_SECS_IN_YEAR) / ($NUMBER_SECS_IN_YEAR));
$days = floor(($difference - $years * $NUMBER_SECS_IN_YEAR - $months*30*60*60*24)/ (60*60*24));

echo "$years лет, $months месяцев, $days дней";
?>

</body>
</html>
