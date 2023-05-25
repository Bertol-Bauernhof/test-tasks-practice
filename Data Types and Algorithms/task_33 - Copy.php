<!DOCTYPE html>
<html>
 <head>
   <title>T11</title> 
 </head>
<body>

<?php 
function calculate($var1, $var2) {
  if ($var1 = $var2)
    return ($var1 + $var2) * 3;
  } else {
    return $var1 + $var2;
  }
}
echo calculate(1, 2)."\n";
echo calculate(3, 2)."\n";
echo calculate(2, 2)."\n";   
?>

</body>
</html>