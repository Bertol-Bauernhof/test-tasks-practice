<!DOCTYPE html>
<html>
<head>
<?php
	$string = "$12,334.00A";
	echo preg_replace("/[^0-9,.]/", "", $string);
?>
</body>
</html>
