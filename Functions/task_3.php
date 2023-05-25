<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php

function factorial($number) {
  if($number == 0)
	   return 1;
  else 
	   return $number * factorial($number-1);
	}
print_r(factorial(5)."\n");
?>
</body>
</html>