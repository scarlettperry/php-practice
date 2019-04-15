<?php include "db.php"; //need to include this bc otherwise this file won't know about the db connection

  function createUser(){
    global $connection;
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
        echo "Record created";
      }
  }
}


  function showAllData(){
    global $connection; //need to make this varibale global so that it could read it from the other file
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }

  }

  function updateLoginInfo(){
    global $connection;
    if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];

      $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";


      $result = mysqli_query($connection, $query);

      if(!$result){
        die("Query failed" . mysqli_error($connection));
      }
      else{
        echo "User record updated";
      }
    }

  }

  function deleteUser(){
    global $connection;
    if(isset($_POST['submit'])){
      $id = $_POST['id'];

      $query = "DELETE FROM users WHERE id = $id";


      $result = mysqli_query($connection, $query);

      if(!$result){
        die("Query failed" . mysqli_error($connection));
      }
      else {
        echo "User deleted";
      }
    }

  }

?>
