<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
$month_russian = array(
  "1"=>"Январь"
  , "2"=>"Февраль"
  , "3"=>"Март"
  , "4"=>"Апрель"
  , "5"=>"Маe"
  , "6"=>"Июнь"
  , "7"=>"Июль"
  , "8"=>"Август"
  , "9"=>"Сентябрь"
  , "10"=>"Октябрь"
  , "11"=>"Ноябрь"
  , "12"=>"Декабрь"
);
   
  $current_month = $month_russian[date("n")]; 
  echo 'Количество дней в '.$current_month.' равно '.date('t');
?>

</body>
</html>
