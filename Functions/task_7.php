<!DOCTYPE html>
<html>
 <head>
   <title>Task 7</title> 
 </head>
<body>

<?php
var_dump(isLowercase('wm-school'));
var_dump(isLowercase('WM-School'));

function isLowercase($string) {
  for ($i = 0; $i < strlen($string); $i++) {
    if (ord($string[$i]) >= ord('A') &&
      ord($string[$i]) <= ord('Z')) {
      return false;
    }
  }
  return true;
}
?>
</body>
</html>
