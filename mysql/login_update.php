<?php include "db.php";
include "functions.php";
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";


    $result = mysqli_query($connection, $query);

    if(!$result){
      die("Query failed" . mysqli_error($connection));
    }

  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
