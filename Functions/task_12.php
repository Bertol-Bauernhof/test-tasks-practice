<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
if (!isset($_POST['submit'])){
?>

<form method="post" action="task_12.php">
<p>Пожалуйста, введите вашу информацию:</p>
Город: <input type = "text" name = "city" />
Месяц: <input type = "text" name = "month" />
Год: <input type = "text" name = "year" />
<p> Выберите тип погоды из списка ниже</p>

<?php
  show('солнце', 'облака', 'дождь', 'град', 'мокрый снег', 'снег', 'ветер', 'холод', 'тепло', 'туман', 'влажность'); 
?>

<p/>
<p> Что-нибудь еще? Укажите дополнительные погодные условия (через запятую). </p>
<input type="text" name="descriptions" size="60" /><p/>
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
вы наблюдали следующую погоду:<br/> <ul>";
$weather = $_POST['weather'];
$descriptions = $_POST['descriptions'];
showList($weather);
showList($descriptions);
echo "</ul>";
}

function show(){
  $args = func_get_args();
  foreach ($args as $arg){
    echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$arg\" />".ucwords($arg)."<br>\n";
  }
}
 
function showList($args){
  if (!is_array($args)){
    $args = explode(',', $args);
  }
  foreach ($args as $a){
    echo "<li>" . ucwords($a). "</li>\n";
  }
}

?>

</body>
</html>
