<!DOCTYPE html>
<html>
 <head>
   <title>T11</title> 
 </head>
<body>

<?php
if (!isset($_POST['submit'])){
?>

<form method="post" action="task_11.php">
<p>Введите информацию:</p>
Город <input type = "text" name = "city" />
Месяц <input type = "text" name = "month" />
Год <input type = "text" name = "year" />
<p>Выберите тип погоды</p>
<?php
  show('солнце', 'облака', 'дождь', 'град', 'мокрый снег', 'снег', 'ветер', 'холод', 'тепло');
?>
<input type="submit" name="submit" value="Выполнить" />
</form>

<?php
} else {
  $user_input = array(
    $_POST['city'],
    $_POST['month'],
    $_POST['year']
  );
  echo "В городе $user_input[0] в месяце $user_input[1] $user_input[2] года, 
  была следующая погода:<br/> <ul>";
  $weather = $_POST['weather'];
  foreach($weather as $w){
    echo "<li>" . ucwords($w) . "</li>\n";  
  }
  echo "</ul>";
}

function show(){
  $args = func_get_args();
  foreach ($args as $arg){
    echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$arg\" />" .
    ucwords($arg) . "<br />\n";
  }
}

?>

</body>
</html>
