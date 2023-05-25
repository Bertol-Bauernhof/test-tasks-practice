<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php 
function calculate($var1, $var2) {
    return ($var1 == 30) || ($var2 == 30) || ($var1 + $var2 == 30);
}

echo calculate(30, 0);
echo calculate(20, 5);
echo calculate(15, 30);

?>

</body>
</html>
