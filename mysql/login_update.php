<?php include "db.php";
include "functions.php";
    updateLoginInfo();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>CRUD: Update</h1>
    <form action="login_update.php" method="post">
      <label for="username">Username</label>
      <input type="text" name="username">
      <label for="password">Password</label>
      <input type="text" name="password">
      <select name="id">
        <?php
          showAllData();
        ?>
      </select>
      <input type="submit" name="submit">
    </form>
  </body>
</html>
