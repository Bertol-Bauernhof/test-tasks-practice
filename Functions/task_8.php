<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="5" cellspacing="0">
<?php
echo isPalindrome('madam')."<br>";
echo isPalindrome('robot');

function isPalindrome($string) {
  if ($string == strrev($string))
      return true;
  else
    return false;
}
?>
</table>
</body>
</html>
