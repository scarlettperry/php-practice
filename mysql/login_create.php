<?php include "db.php";
include "functions.php";

  createUser();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>CRUD: Create</h1>
    <form action="login_create.php" method="post">
      <label for="username">Username</label>
      <input type="text" name="username">
      <label for="password">Password</label>
      <input type="text" name="password">
      <input type="submit" name="submit">
    </form>
  </body>
</html>
