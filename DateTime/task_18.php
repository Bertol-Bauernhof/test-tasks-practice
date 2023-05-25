<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $birth_day = new DateTime('11.4.1977'); 
  $today = new Datetime(date('m.d.y'));
  $temp = $today->diff($birth_day);
  echo "Ваш возраст: $temp->y лет, $temp->m месяцев, $temp->d дней";
?>

</body>
</html>
