<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
$string = 'Быстрая " "   рыжая лиса';
echo preg_replace('/\s+/', '', $string)."\n";
?>
</body>
</html>