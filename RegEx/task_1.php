<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
echo "Answer ".hasStringContainsAnotherString('Another string has', 'string');

function hasStringContainsAnotherString($checked_string, $string){
  if (preg_match('~'. preg_quote($string, '~') . '(.*?)~i', $checked_string))
    return "true";

  return "false";
}
?>

</body>
</html>
