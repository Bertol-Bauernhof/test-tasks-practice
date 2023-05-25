<!DOCTYPE html>
<html>
 <head>
   <title>T8</title> 
 </head>
<body>

<?php
  $values = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  echo substr(str_shuffle($values), 0, 7);
?>

</body>
</html>
