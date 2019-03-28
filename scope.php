<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $x = "outside"; //global

      function convert(){
        global $x;
        $x = "inside"; //local
      }

      echo $x . "<br>"; //before function runs

      convert();

      echo $x; //function changes value of $x
    ?>
  </body>
</html>
