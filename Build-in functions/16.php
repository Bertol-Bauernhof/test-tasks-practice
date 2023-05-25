<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $string = 'У лукоморья зелёный';
  $string2 ='дуб';
  $position = 5;
  $string3 = substr_replace($string, $string2.' ', $position, 0);

  echo $string3;
?>
</body>
</html>
