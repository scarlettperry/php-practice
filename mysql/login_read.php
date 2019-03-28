<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
                                                          //database
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if(!$username OR !$password){
      echo "fields cannot be empty";
    }


    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    //only submit to database if both inputs were entered
    if ($username && $password) {
      $result = mysqli_query($connection, $query);
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
    <form action="login_create.php" method="post">
      <label for="username">Username</label>
      <input type="text" name="username">
      <label for="password">Password</label>
      <input type="text" name="password">
      <input type="submit" name="submit">
    </form>
  </body>
</html>
