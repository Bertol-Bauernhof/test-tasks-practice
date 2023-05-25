<!DOCTYPE html>
<html>
<head>
  <?php 
function calculate($user_var) {
     $var1 = 51;

     if ($user_var > $var1) {
       return ($user_var - $var1)*3;
     }
   return $var1 - $user_var;
}
echo calculate(53)."\n";
echo calculate(30)."\n";
echo calculate(51)."\n";  
?>

</body>
</html>
