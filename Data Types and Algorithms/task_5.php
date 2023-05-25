<!DOCTYPE html>
<html>
<head>
   <title>Task 5</title>
   <style>
      h1 {color:royalblue;}
   </style>
</head>
<body>
  <form method='POST'>
   <h3>Enter your name:</h3>
    <input type="text" name="name" placeholder="Name">
    <input type="submit" value="Submit">
  </form>

<?php
  $name = $_POST['name'];
  echo "<h1> Hello, $name </h1>";
?>
</body>
</html>