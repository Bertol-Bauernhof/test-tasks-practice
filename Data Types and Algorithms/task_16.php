<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $file_name = basename($_SERVER['PHP_SELF']);

  echo "Last modifies: " . getInfoLastModifies($file_name);

  function getInfoLastModifies($file_name) {
    $last_modifies = filemtime($file_name); 
    return date("h:ia, dS F, Y", $last_modifies);
  }  
?>
</body>
</html>
