<!DOCTYPE html>
<html>
<head>
</style>
</head>
 
<?php
  $start_date = time();
  $end_date = strtotime("2015-01-31");
  echo floor(($start_date - $end_date) / (60*60*24))
?>
 
</body>
</html>
