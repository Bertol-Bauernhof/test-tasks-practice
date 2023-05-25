<!DOCTYPE html>
<html>
 <head>
   <title>Practice 1</title> 
 </head>
<body>

<?php
  $path = file('https://www.theatlantic.com/technology/archive/2023/05/generative-ai-social-media-integration-dangers-disinformation-addiction/673940/');

  showPageCode($path);

  function showPageCode($file) {
    foreach ($file as $lines => $line) {
      echo htmlspecialchars($line);
    }
  }
?> 

</body>
</html>
