<!DOCTYPE html>
<html>
 <head>
   <title>T8</title> 
 </head>
<body>

<?php 
echo createNewString("C Sharp")."\n";
echo createNewString("JS")."\n";
echo createNewString("a");

function createNewString($str) {
  if (strlen($str) > 1) {
    $changed_str = substr($str, 0, 2)
                  .substr($str, 0, 2)
                  .substr($str, 0, 2)
                  .substr($str, 0, 2);
    return $changed_str;
  }
  return $str;
}  
?>

</body>
</html>
