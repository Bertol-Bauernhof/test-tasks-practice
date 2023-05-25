<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $start_date = "2021-09-12";
  $new_date = date("d-m-Y", strtotime($start_date));
  echo $new_date;
?>

</body>
</html>
