<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $natural = array( '1','2','3','4','5' );
  echo 'Массив до: '."\n";
  
  foreach ($natural as $x) { 
    echo "$x ";
  }

  $inserted = '$';
  array_splice($natural, 3, 0, $inserted); 
  echo " \n После вставки '$' массив: "."\n";

  foreach ($natural as $x) { 
    echo "$x ";
  }
  echo "\n"
?>
</body>
</html>
