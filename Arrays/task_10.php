<!DOCTYPE html>
<html>
 <head>
   <title>T8</title> 
 </head>
<body>

<?php
$x = array(1, 2, 3, 4, 5);
 var_dump($x);
 unset($x[3]);
 
 $x = array_values($x);
 echo '<br>';
var_dump($x);
?>

</body>
</html>
