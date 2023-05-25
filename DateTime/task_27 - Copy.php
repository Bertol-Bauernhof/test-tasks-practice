<!DOCTYPE html>
<html>
 <head>
   <title>Task 7</title> 
 </head>
<body>

<?php
  $month = 12; 
  $date = DateTime::createFromFormat('!m', $month);
  $month_name = $date->format('F');
  echo $month_name;
?>

</body>
</html>
