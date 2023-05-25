<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
for($x=1; $x <=5; $x++){
   for ($y=1; $y <= $x; $y++){
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
?>
</body>
</html>