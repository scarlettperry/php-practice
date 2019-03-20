<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /*while something is true but need a case where it will be false
      otherwise will loop forever
      */
      $counter = 0;
      while($counter <= 10){
        echo $counter;
        echo "<br>";
        $counter++;
      }
    ?>
  </body>
</html>
