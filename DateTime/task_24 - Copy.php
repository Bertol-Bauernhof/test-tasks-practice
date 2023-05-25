<!DOCTYPE html>
<html>
<head>
 <?php
  $date = strtotime("2020-12-21");
  echo date("Y-m-d", strtotime("+1 month", $date));
?>

</body>
</html>
