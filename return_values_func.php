<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function add($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
      }

      $result = add(10, 10);
      echo $result . "<br>";
      $result = add(20, $result);
      echo $result;
    ?>
  </body>
</html>
