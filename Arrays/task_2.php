<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php 
$cities = array( "Москва", "Киев", "Минск", "Токио", "Мехико", "Нью-Йорк", "Сеул", "Шанхай", "Каир", "Лондон" );
  
foreach($cities as $c) {
  echo "$c, ";
}
 
sort($cities);
echo "\n<ul>\n";

foreach($cities as $c) {
  echo "<li>$c</li>\n";
}

echo "</ul>" ;
array_push($cities, "Астана", "Кишинев", "Душанбе", "Баку");
sort($cities);
echo "\n<ul>\n";

foreach($cities as $c) {
  echo "<li>$c</li>\n";
}

echo "</ul>";
?>

</body>
</html>
