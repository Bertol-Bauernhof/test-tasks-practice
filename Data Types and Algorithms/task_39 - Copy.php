<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php 
echo changeChar("abcd")."\n";
echo changeChar("a")."\n";
echo changeChar("xy");

function changeChar($str) {
  if (strlen($str) > 1) {
    $changed_str = substr($str, strlen($str) - 1);
    $changed_str = $changed_str.substr($str, 1, strlen($str) - 2);
    return $changed_str.substr($str, 0, 1);
  }
  return $str;
}
?>

</body>
</html>
