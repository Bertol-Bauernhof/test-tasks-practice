<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<style type="text/css">
td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
th {text-align:center;}
</style>
</head>
 <?php
$city=array(
    array('Город', 'Страна', 'Континент'),
    array('Tokyo', 'Japan', 'Asia'),
    array('Mexico City','Mexico', 'North America'),
    array('New York City', 'USA', 'North America'),
    array('Mumbai', 'India', 'Asia'),
    array('Seoul', 'Korea', 'Asia'),
    array('Shanghai', 'China', 'Asia'),
    array('Lagos', 'Nigeria', 'Africa'),
    array('Buenos Aires', 'Argentina', 'South America'),
    array('Cairo', 'Egypt', 'Africa'),
    array('London', 'UK','Europe')
);
?>

<body>
<table>
  <thead>
    <tr>
      <th>
      <?php
      echo $city[0][0] ."</th>\n<th>";
      echo $city[0][1] ."</th>\n<th>";
      echo $city[0][2] ."</th>\n";
      ?>
    </tr>
</thead>
 
<?php

$num = count($city); 

for ($row=1; $row < $num; $row++) {
  echo "<tr>\n";
  foreach ($city[$row] as $value) {
    echo "<td>$value</td>\n";
  }
  echo "</tr>\n";  
}
?>
 
</table>
 
</body>
</html>