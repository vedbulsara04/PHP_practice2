<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";

      $conn = new mysqli($servername, $username, $password);

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

      //Creating a database.
      $sql = "CREATE DATABASE vedDB";
      if($conn->query($sql) === TRUE){
        echo "Database created successfully!";
      }

      else{
        echo "Database not created! : " . $conn->error;
      }

    $conn->close();
    ?>

  </body>
</html>
