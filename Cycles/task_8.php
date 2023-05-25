<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="5" cellspacing="0">
<?php
  for($i=1;$i<=5;$i++) {
    echo "<tr>";
    for ($j=1;$j<=5;$j++) {
      echo "<td>$i * $j = ".$i*$j."</td>";
    }
    echo "</tr>";
  }
?>
</table>
</body>
</html>
