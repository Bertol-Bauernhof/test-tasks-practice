<!DOCTYPE html>
<html>
 <head>
   <title>T8</title> 
 </head>
<body>

<?php
  $array1 = array(array(77, 87), array(23, 45));
  $array2 = array("wm-school", "ru");

function mergeArrays($x, $y) {
  $temp_var = array(); $temp_var[] = $x; 
  if(is_scalar($y)) {
    $temp_var[] = $y;
  } else {
    foreach($y as $k => $v) {
      $temp_var[] = $v;
    }
  }
  return $temp_var;
}

 print_r(array_map('mergeArrays',$array2, $array1));
?>

</body>
</html>
