<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>
<?php
  $string = 'У лукоморья дуб зелёный златая цепь на дубе том';
  
  echo implode(' ', array_slice(explode(' ', $string), 0, 5));
?>
</body>
</html>
