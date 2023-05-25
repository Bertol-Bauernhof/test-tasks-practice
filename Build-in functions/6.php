<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $email  = 'wm-school@example.com';
  $name = strstr($email, '@', true);
  echo $name;
?>

</body>
</html>
