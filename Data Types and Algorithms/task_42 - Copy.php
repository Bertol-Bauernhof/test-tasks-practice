<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php 
echo checkNumber(3)."\n";
echo checkNumber(14)."\n";
echo checkNumber(12)."\n";
echo checkNumber(37);

function checkNumber($number) {
  return $number % 3 == 0 | $number % 7 == 0 ? "true" : "false";
} 
?>

</body>
</html>
