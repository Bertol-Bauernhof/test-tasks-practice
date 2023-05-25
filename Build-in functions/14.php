<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $string = 'wm-school@';
  $full_string = 'wm-school@example.com';

  if ($string ==substr($full_string, 0, strlen($string))) 
   $full_string = substr($full_string, strlen($string));

  echo $full_string;
?>

</body>
</html>
