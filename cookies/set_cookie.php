<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set cookie</title>
  </head>
  <body>

    <?php
      $cookie_name = "user";
      $cookie_value = "Ved Bulsara";

      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


        if(!isset($_COOKIE[$cookie_name])){
          echo "Cookie '" . $cookie_name . "' is not set!";
          }
          else{
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is : " . $_COOKIE[$cookie_name];
          }
    ?>

  </body>
</html>
