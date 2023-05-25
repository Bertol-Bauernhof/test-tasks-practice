<!DOCTYPE html>
<html>
 <head>
   <title>T11</title> 
 </head>
<body>

<?php
echo createNewString("Red")."\n";
echo createNewString("Green")."\n";
echo createNewString("1")."\n";

function createNewString($str) {
   $changed_str = substr($str, strlen($str) - 1);
    return $changed_str.$str.$changed_str;
}  
?>
</body>
</html>
