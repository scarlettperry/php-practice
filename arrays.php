<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $numberList1 = array(23, 64, 478, 1, "apple", '<h1>hello world</h1>'); //"old" way of doing it
      $numberList2 = []; //new way of doing it

      echo $numberList1[5];

      print_r($numberList1);

     ?>
  </body>
</html>
