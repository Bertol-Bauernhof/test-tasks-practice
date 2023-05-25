<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $START_VALUE = 'B00';
 
  outputNUmbers($START_VALUE);

  function outputNumbers($start_value) {
    for ($n = 0; $n < 5; $n++)
      echo ++$start_value ."\n";
  }  
?>

</body>
</html>
