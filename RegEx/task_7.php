<!DOCTYPE html>
<html>
 <head>
   <title>Task 7</title> 
 </head>
<body>

<?php
  $string = 'abcde$ddfd @abcd )der]';
  echo 'До: '.$string.'<br>';

  $string_new = preg_replace("/[^A-Za-z0-9 ]/", '', $string);
  echo 'После: '.$string_new."\n";
?>
</body>
</html>
