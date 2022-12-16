<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Start</title>
  </head>
  <body>

    <?php
      session_start();

        $_SESSION["favdriver"] = "Lewis Hamilton";
        $_SESSION["favteam"] = "Mercedes AMG F1";
        echo "Session variables are set!";
    ?>

  </body>
</html>
