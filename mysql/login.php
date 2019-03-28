<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
                                                          //database
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection){
      echo "we are connected";
    }else{
      die("Database connection failure");
    }
      // if($username && $password){
      //   echo $username;
      //   echo $password;
      // }else {
      //   echo "fields cannot be blank";
      // }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="login.php" method="post">
      <label for="username">Username</label>
      <input type="text" name="username">
      <label for="password">Password</label>
      <input type="text" name="password">
      <input type="submit" name="submit">
    </form>
  </body>
</html>
