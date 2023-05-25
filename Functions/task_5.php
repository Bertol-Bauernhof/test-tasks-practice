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
function reverseString($string) {
 $length_string = strlen($string);

 if($length_string == 1) {
    return $string;
} else {
   $length_string--;
   return reverseString(substr($string,1, $length_string)) . substr($string, 0, 1);
   }
}
print_r(reverseString('1234')."\n");
?>
</body>
</html>