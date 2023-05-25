<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php

echo "Result: ". replaceString('Another string has', 'has');

function replaceString($checked_string, $deleted_string) {
  $pattern = '~'. preg_quote($deleted_string, '~') . '(.*?)~i';

  if (hasStringContainsAnotherString($checked_string, $deleted_string))
    return preg_replace($pattern, '$1', $checked_string)."\n";
  return "This string don't exist";
}

function hasStringContainsAnotherString($checked_string, $string) {
  $pattern = '~'. preg_quote($string, '~') . '(.*?)~i';
  if (preg_match($pattern, $checked_string))
    return true;
  return false;
}
?>


</body>
</html>
