<!DOCTYPE html>
<html>
<head>
  <?php 
    if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
    echo 'версия PHP минимум 7.0.0, моя версия: ' . PHP_VERSION;
    }
    if (version_compare(PHP_VERSION, '7.1.0') >= 0) {
    echo 'PHP не ниже 7.1.0, моя версия: ' . PHP_VERSION;
    }
?>

</body>
</html>
