<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $url = "http://www.wm-school.ru/7478639";
  echo substr($url, strrpos($url, '/' ) + 1);
?>

</body>
</html>
