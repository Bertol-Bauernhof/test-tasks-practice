<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>
<?php 
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $full_url."\n";
?>
</body>
</html>
