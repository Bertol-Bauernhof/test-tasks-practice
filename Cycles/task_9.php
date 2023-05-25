<!DOCTYPE html>
<html> 
<head> 
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body> 
<table width="225px" cellspacing="0px" cellpadding="0px" border="1px">

<?php
for($row=1;$row<=8;$row++) {
  echo "<tr>";
  for($col=1;$col<=8;$col++) {
    $total=$row+$col;
    if($total%2==0) {
      echo "<td height=25px width=25px bgcolor=#blue></td>";
    } else {
      echo "<td height=25px width=25px bgcolor=#000000></td>";
    }
  }
  echo "</tr>";
}
?>
</table>
</body>
</html>
