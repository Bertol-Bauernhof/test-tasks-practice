<!DOCTYPE html>
<html> 
<head> 
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body> 

<?php
if(!isset ($_POST['submit'])){
?>
<form method="post" action="task_9.php">
<p>Введите значения длины и ширины прямоугольника.</p>
<p>Длина:  <input type="text" name="length" size="7" /> 
Ширина:  <input type="text" name="width" size="7" /></p>
<input type="submit" name="submit" value="Выполнить" />
</form>
<?php
} else {

$length = $_POST['length'];
$width = $_POST['width'];

function getArea($length, $width){
  $area = $length * $width;
  return $area;
}
echo "Площадь прямоугольника длиной $length и шириной $width равна " . recArea($length, $width). "."; 
}
?>
</body>
</html>
