<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
getArea(2, 4);

function getArea($length, $height){
  $area = $length * $height;
  echo "Прямоугольник длиной $length и шириной $height имеет площадь $area.";
}
?>

</body>
</html>
