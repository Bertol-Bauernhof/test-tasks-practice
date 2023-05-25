<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $secs = 4;

  stopExuction($secs);

  function stopExuction($secs) {
    echo date('h:i:s');
    echo "<br><br>";
    sleep($secs);
    echo date('h:i:s');
  }  
?>

</body>
</html>
