<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
function calculate($var) {
   if(abs($x - 100) <= 10 || abs($x - 200) <= 10) {
            return true;
  }        
     return false;
}

var_dump(calculate(105));
var_dump(calculate(90));
var_dump(calculate(89));  
?>
</body>
</html>