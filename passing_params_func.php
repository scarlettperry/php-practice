<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function greeting($name){
        echo "Hello " . $name;
      }
      greeting("Scarlett");

      function add($num1, $num2){
        $sum = $num1 + $num2;
        echo $sum;
      }

      add(10, 10);
    ?>
  </body>
</html>
