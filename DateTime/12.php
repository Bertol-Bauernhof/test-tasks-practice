<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $month_number = 12;
  $month_name = date("F", mktime(0, 0, 0, $month_number, 10));
  
  echo $month_name; 
?>

</body>
</html>
