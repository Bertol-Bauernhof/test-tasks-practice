<!DOCTYPE html>
<html> 
<head> 
<title></title>
</head>
<body> 
<?php
$date = "2021-02-23";
echo 'День первый: ' . date("Y-m-01", strtotime($date)) . ' - Последний день: ' . date("Y-m-t", strtotime($date)); 
?>
</table>
</body>
</html>
