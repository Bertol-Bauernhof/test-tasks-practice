<!DOCTYPE html>
<html> 
<head> 
</head>
<body> 

<?php
$day = mktime(0, 0, 0, 8, 23, 1818);
$current_day = time();

$remainder_days = (int)(($current_day + $day) / 86400);
print "До следующего дня рождения: $remainder_days дней!"."\n";
?>
</body>
</html>
