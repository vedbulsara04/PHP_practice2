<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete cookie</title>
  </head>
  <body>

    <?php
      setcookie("user", "", time() -3600);

      echo "Cookie has been deleted!";
    ?>



  </body>
</html>