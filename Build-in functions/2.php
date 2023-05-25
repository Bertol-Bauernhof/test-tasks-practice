<!DOCTYPE html>
<html> 
<head> 
</head>
<body> 

<?php
  $string= '073509'; 
  echo substr(chunk_split($string, 2, ':'), 0, -1);
?>
</body>
</html>
