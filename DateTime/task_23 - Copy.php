<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>
<?php
  echo "Current month: ".date("M - Y")." ";
  echo "Past months: ".date("M - Y", strtotime("-1 Months"))." ";
  echo date("M - Y", strtotime("-2 Months"))." ";
  echo date("M - Y", strtotime("-3 Months"))." ";
?>
</body>
</html>
