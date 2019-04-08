<?php include "db.php";

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      while($row = mysqli_fetch_assoc($result)){
        print_r($row);
      }
    ?>
  </body>
</html>
