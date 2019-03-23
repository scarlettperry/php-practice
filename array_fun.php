<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $num_list = [2, 1, 3, 4, 5];

      echo max($num_list); //largest num in array
      echo "<br>";
      echo min($num_list);
      echo "<br>";
      print_r($num_list);
      echo "<br>";
      sort($num_list);
      print_r($num_list);
    ?>
  </body>
</html>
