<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $string = '\"\4+2/3*2:2-3/4*3';
  echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $string);
?>

</body>
</html>