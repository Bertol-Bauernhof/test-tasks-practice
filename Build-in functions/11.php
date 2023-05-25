<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $string1 = 'wm-school';
  $string2 = 'wm-schul';
  $difference = strspn($string1 ^ $string2, "\0");

  printf('Первое различие между двумя строками в позиции %d: "%s" и "%s"',
  $difference, $string1[$difference], $string2[$difference]);
?>

</body>
</html>
