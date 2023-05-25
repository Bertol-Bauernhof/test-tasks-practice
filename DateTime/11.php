<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $date = new DateTime('2019-03-01 02:12:51');
  $var = $date -> diff(new DateTime('2021-03-12 11:10:00'));
  echo 'дней всего: ' . $var->days."\n";
  echo ' лет: '.$var->y."\n";
  echo ' месяцев: '.$var->m."\n";
  echo ' дней: '.$var->d."\n";
  echo ' часов: '.$var->h."\n";
  echo ' минут: '.$var->i."\n";
  echo ' секунд: '.$var->s."\n";
?>

</body>
</html>
