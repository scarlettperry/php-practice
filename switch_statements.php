<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $number = 10; //good when testing ONE condition against multiple different values
      switch($number){
        case 11:
          echo "it is 11";
          break;
        case 12:
          echo "it is 12";
          break;
        default:
          echo "we could not find a match";
      }
    ?>
  </body>
</html>
