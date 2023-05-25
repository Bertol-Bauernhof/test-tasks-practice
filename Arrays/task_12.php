<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
function decode_function($value,$key) {
  echo "$key : $value"."\n";
}

$json = '{
    "Заголовок": "Зов кукушки",
    "Автор": "Роберт Гэлбрейт",
    "Детали": { 
      "Издатель": "Маленький Браун"
    }
  }';

$saved_decode_json = json_decode($json, true);
array_walk_recursive($saved_decode_json,"decode_function");
?>

</body>
</html>
