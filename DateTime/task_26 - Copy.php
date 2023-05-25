<!DOCTYPE html>
<html>
<head>
   <title>Task 5</title>
</head>
<body>
<?php
  $month_russian = array(
  	"01"=>"Январь"
  , "02"=>"Февраль"
  , "03"=>"Март"
  , "04"=>"Апрель"
  , "05"=>"Май"
  , "06"=>"Июнь"
  , "07"=>"Июль"
  , "08"=>"Август"
  , "09"=>"Сентябрь"
  , "10"=>"Октябрь"
  , "11"=>"Ноябрь"
  , "12"=>"Декабрь"
);
   
  $currentDatOnRussian = date("d m Y");

	$month = date("m"); 
	$currentDatOnRussian = str_replace($month, " " . $month_russian[$month] . " ", $currentDatOnRussian);
	echo $currentDatOnRussian;
?>
</body>
</html>