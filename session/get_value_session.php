<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Session value</title>
  </head>
  <body>

    <?php
    session_start();
      echo "Favourite formula1 driver is : " . $_SESSION["favdriver"] . "<br>";
      echo "Favourite formula1 team is : " . $_SESSION["favteam"] . "<br>";
    ?>

  </body>
</html>
