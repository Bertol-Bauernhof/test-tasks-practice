<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php 

echo removeChar("Python", 1)."\n";
echo removeChar("Python", 0)."\n";
echo removeChar("Python", 4);

function removeChar($str, $removing_char) {
  $changed_str = substr($str, 0, $removing_char);
  $changed_str = $changed_str.substr($str,$removing_char+1,strlen($str)-$removing_char);
   return $changed_str;
}
?>

</body>
</html>
