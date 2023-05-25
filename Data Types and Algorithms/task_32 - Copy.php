<?php
	$var1 = 15;
	$var2 = 25;

	echo "Перед заменой:\n";
	echo "Число var1 = ".$var1." & var2 = ".$var2;

	$temp_var = $var1;
	$var1 = $var2;
	$var2 = $temp_var;
	 
	echo "После замены: \n";
	echo "Число var1 = ".$var1." & var2 = ".$var2;
?>
