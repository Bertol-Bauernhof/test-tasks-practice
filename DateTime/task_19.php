<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
$start_date = '1/1/2020';
$end_date = '12/31/2020';
echo 'С ' . $start_date . ' по ' . $end_date . ' прошло ' . getNumberWeekBetweenDates($start_date, $end_date).' недели';

function getNumberWeekBetweenDates($start_date, $end_date) {
    $date_1 = DateTime::createFromFormat('m/d/Y', $start_date);
    $date_2 = DateTime::createFromFormat('m/d/Y', $end_date);
    return $date_1->diff($date_2)->days/7;
}
?>

</body>
</html>
