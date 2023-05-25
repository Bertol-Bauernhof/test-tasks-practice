<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $string = 'У лукоморья дуб зелёный';
  $array_string = explode(' ', trim($string));

  echo $array_string[0];
?>

</body>
</html>
