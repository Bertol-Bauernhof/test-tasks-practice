<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php 
$color = array('красный', 'белый', 'зеленый');
foreach ($color as $c) {
  echo "$c, ";
}

sort($color);
echo "<ul>";

foreach ($color as $y) {
  echo "<li>$y</li>";
}
echo "</ul>";
?>


</body>
</html>
