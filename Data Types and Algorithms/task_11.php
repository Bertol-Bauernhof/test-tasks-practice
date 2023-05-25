<!DOCTYPE html>
<html>
 <head>
   <title>T11</title> 
 </head>
<body>

<?php
function isHttps() {
  if (!empty($_SERVER['HTTPS'])) {
    return true;
  }
  return false;
}

function identifyProtocol() {
  if (isHttps()) {
    echo 'https on';
  }
  echo 'http on';
} 

echo identifyProtocol();
?>
</body>
</html>
