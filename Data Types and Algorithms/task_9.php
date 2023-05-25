<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $url = 'https://wm-school.ru/php/php_exercises.php';
  echo 'Протокол: '.parse_url($url, PHP_URL_SCHEME)." ";
  echo 'Хост: '.parse_url($url, PHP_URL_HOST)." ";
  echo 'Путь: '.parse_url($url, PHP_URL_PATH)." ";
?>

</body>
</html>
