<!DOCTYPE html>
<html>
 <head>
   <title>Task 7</title> 
 </head>
<body>



<?php 

echo createString("if else");
echo createString("else"); 

function createString($str) {
  if (substr($str, 0, 2) == "if" && strlen($str) > 2){
      return $str;
  }
  return "if ".$str;
}
?>

</body>
</html>
