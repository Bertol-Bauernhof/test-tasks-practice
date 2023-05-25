<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $file = basename($_SERVER['PHP_SELF']);

  echo "The file '$file' contains " . getNumberOfLines($file) . " strings";

  function getNumberOfLines($file) {
    return $number_of_lines = count(file($file));
  }  
?>
</body>
</html>
