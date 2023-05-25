<!DOCTYPE html>
<html>
 <head>
   <title>T11</title> 
 </head>
<body>

<?php
  $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
  
  $Color = setUpperOrLower($Color, "");

  /*
   * @param valid value "U"-upper or "L"-lower (default)
   * @return array
   */
  function setUpperOrLower($some_array, $type) {
    if (strcmp($type, "U") == 0)
      return array_map('strtoupper' , $some_array);
    return array_map('strtolower' , $some_array);
  }


  foreach($Color as $element )
    echo $element . " ";
?>
</body>
</html>
