<!DOCTYPE html>
<html>
<head>
   <title>Task 5</title>
   <style>
      h1 {color:royalblue;}
   </style>
</head>
<body>
<?php
$string = "Мерцай, мерцай, звездочка,\nКак мне интересно, кто ты. \nВверху над миром, так высоко, \nПодобно алмазу в небе.";

echo preg_replace('/\s+/', ' ', trim($string));
?>
</body>
</html>