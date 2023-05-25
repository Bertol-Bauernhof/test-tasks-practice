<!DOCTYPE html>
<html>
<head>
<?php
$number = isPrime(5);

if ($number == 0)
  echo 'не простое число'."\n";
else
  echo 'простое число'."\n";

function isPrime($number) {
 for($x=2; $x < $number; $x++) {
    if($number %$x ==0) {
       return 0;
    }
  }
  return 1;
}
?>
</body>
</html>
