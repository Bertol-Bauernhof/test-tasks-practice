<!DOCTYPE html>
<html>
 <head>
 </head>
<body>

<?php
  $string = 'Каждый охотник желает знать.';
  echo preg_replace('/Каждый/', 'Один', $string, 1); 
?>
</body>
</html>
