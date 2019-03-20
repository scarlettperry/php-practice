<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //works with arrays

      $numbers = [1,2,3];

              //array     //each value in array
      //foreach already knows the length of the array
      foreach($numbers as $number){
        echo $number . "<br>";
      }
    ?>
  </body>
</html>
