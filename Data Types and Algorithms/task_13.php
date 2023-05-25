<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php 
  $user_email = "wikijob@outlook.com";

  function checkEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return 'Email Good';
    }
    return 'Email Worst';
  }

  echo checkEmail($user_email)
?>

</body>
</html>
