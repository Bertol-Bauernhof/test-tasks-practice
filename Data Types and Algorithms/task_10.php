<!DOCTYPE html>
<html>
 <head>
   <title>T8</title> 
 </head>
<body>

<?php
  $string = 'Hello World!';
  $pattern = '/(\b[a-z])/i';
  $replacement = '<span style="color:blue;">\1</span>';
  $modified_string = preg_replace($pattern, $replacement, $string);

  echo $modified_string;
?>

</body>
</html>
