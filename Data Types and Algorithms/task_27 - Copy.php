<!DOCTYPE html>
<html>
 <head>
   <title>Task 7</title> 
 </head>
<body>

<?php
  echo php_uname();
  echo PHP_OS;

  if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
    echo 'Windows!';
  } else {
    echo 'не Windows!'."\n";
  }
?>

</body>
</html>
