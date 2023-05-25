<!DOCTYPE html>
<html>
 <head>
   <title>T11</title> 
 </head>
<body>

<?php
for ($i = 1; $i <= 100; $i++) {
  if ( $i%3 == 0 && $i%5 == 0 ) {
     echo $i . " wm-school.ru"."\n" ;
   } else if ( $i%3 == 0 ) {
     echo $i. " wm-school"."\n";
   } else if ( $i%5 == 0 ) {
     echo $i. " .ru"."\n";
   } else {
     echo $i."\n";
   }
 }
?>
</body>
</html>
