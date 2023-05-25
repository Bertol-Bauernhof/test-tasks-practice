<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $string = 'Быстрая рыжая [лиса].';
  preg_match('#\[(.*?)\]#', $string, $var);
  print $var[1];
?>
</body>
</html>

