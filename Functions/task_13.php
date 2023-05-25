<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
$months = array(
  'Январь'=>31,
  'Февраль'=>'28 дней (в високосный год 29)',
  'Март'=>31,
  'Апрель'=>30,
  'Май'=>31,
  'Июнь'=>30,
  'Июль'=>31,
  'Август'=>31,
  'Сентябрь'=>30,
  'Октябрь'=>31,
  'Ноябрь'=>30,
  'Декабрь'=>31
);
if(!isset ($_POST['submit'])){
?>

<form method="post" action="task_13.php">
<p>Выберите месяц</p>

<?php
makeSelect('month', $months);
?>

<input type="submit" name="submit" value="Выполнить" />
</form>

<?php
} else {
  $month = $_POST['month'];
  if ($month == 'Ноябрь'){
    echo "Месяц имеет " . $months['Ноябрь'] . ".";
  } else {
    echo "Месяц $month имеет $months[$month] дней.";
  }
}

  function makeOptions($array){
     foreach($array as $key => $value)
        echo "<option value=\"$key\">" . ucfirst($key) . "</option>\n";
  }
 
  function makeSelect($name, $array){
     if (!is_array($array)){
        echo "Error: it's not an array";
        return -1;
     } else {
         echo "<select name=\"$name\">\n";
         makeOptions($array);
         echo "</select>" ;
         return 0;
     }    
  }

?>

</body>
</html>
