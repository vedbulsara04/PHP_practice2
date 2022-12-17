<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
  </head>
  <body>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "veddb";

      //checking the connection.
      $conn = new mysqli($servername, $username, $password, $dbname);

      if($conn->connect_error){
        die("Could not connect! : " . $conn->connect_error);
      }

      //Creating a table.
      $sql = "CREATE TABLE formula1(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        drivername VARCHAR(30) NOT NULL,
        teamname VARCHAR(30) NOT NULL)";


      if($conn->query($sql) === TRUE){
        echo "Table created successfully!";
      }
      else{
        echo "Table not created! " . $conn->error;
      }

    $conn->close();   
    ?>

  </body>
</html>
