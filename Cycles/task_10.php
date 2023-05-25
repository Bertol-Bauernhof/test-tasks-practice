<!DOCTYPE html>
<html>
 <head>
   <title>T8</title> 
 </head>
<body>

<?php
  echo "<table border =\"1\" style='border-collapse: collapse'>";
  
  for ($row=1; $row <= 10; $row++) { 
    echo "<tr> \n";
    for ($coloum = 1; $coloum <= 10; $coloum++) { 
     $var = $coloum * $row;
     echo "<td>$var</td> \n";
    }
    echo "</tr>";
  }
  echo "</table>";
?>

</body>
</html>
