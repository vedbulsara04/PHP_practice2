<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check cookie</title>
  </head>
  <body>

    <?php
      if(count($_COOKIE) > 0){
        echo "Cookies are enabled!";
      }
      else{
        echo "Cookies are disabled!";
      }
    ?>

  </body>
</html>
