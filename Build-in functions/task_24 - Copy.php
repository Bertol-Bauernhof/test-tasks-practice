<!DOCTYPE html>
<html>
<head>
 <?php
    $string = "3,543.17";
    $replace_str = str_replace( ',', '', $string);

    if(is_numeric($replace_str))
      echo $replace_str;
?>
</body>
</html>
