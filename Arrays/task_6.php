<!DOCTYPE html>
<html>
<head>
   <title>Task 5</title>
   <style>
      h1 {color:royalblue;}
   </style>
</head>
<body>
<?php
$high_temps = array(
  68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 
  68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83
);
 
$count = count($high_temps);
 
$total = 0;
foreach ($high_temps as $h){
  $total += $h;
}

$avg = round($total / $count);
 

echo "<p>Средняя максимальная температура за месяц составила $avg &deg;F.</p>\n";
 
rsort($high_temps);
$top_temps = array_slice($high_temps, 0, 5);
echo "<p>Пять самых тёплых температур: <br />\n";
foreach($top_temps as $t){
  echo "$t &deg;F <br/> \n";
}
echo "</p>";
 
$low_temps = array_slice($high_temps, -5, 5);
echo "<p>Пять самых холодных температур: <br/>\n";
foreach($low_temps as $l){
  echo "$l &deg;F <br/> \n";
}
echo "</p>";
?>
</body>
</html>

