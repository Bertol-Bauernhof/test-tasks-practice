<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $path = 'localhost/build-in%20function/5.php';
  $name = substr(strrchr($path, "/"), 1);
  echo $name;
?>

</body>
</html>
