<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $path = 'https://www.wm-school.ru/index.html';
  $name = basename($path, ".html"); 
  
  echo $name;
?>

</body>
</html>
