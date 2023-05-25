<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
function arraySort($array) {
 for($i=0; $i < count($array); ++$i) {
    $min = $i;

    for($k=$i+1; $k < count($array); ++$k) {
      if($array[$k] < $array[$min] ) {
        $t = $array[$min];
        $array[$min] = $array[$k];
        $array[$k] = $t;
      }
    }
 }
 return $array;
}

$array = array(33, 22, 11, 55,'wm-school');
print_r(arraySort($array));
?>
</body>
</html>

