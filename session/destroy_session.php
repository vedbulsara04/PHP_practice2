<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>

    <?php
      session_start();
      
      //remove all session variables.
      session_unset();

      //destroy the session.
      session_destroy();
    ?>

  </body>
</html>
