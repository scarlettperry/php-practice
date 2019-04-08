<?php include "db.php"; //need to include this bc otherwise this file won't know about the db connection

  function showAllData(){
    global $connection; //need to make this varibale global so that it could read it from the other file
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }

  }

?>
