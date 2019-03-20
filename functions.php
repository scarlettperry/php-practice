<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function say_hello(){
        echo "hello" . "<br>";
      }

      say_hello();

      function init(){
        echo "i'm in init" . "<br>";
        calculate();
      }

      function calculate(){
        echo 4 + 5;
      }

      init();
    ?>
  </body>
</html>
