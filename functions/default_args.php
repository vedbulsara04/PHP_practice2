<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Arguments</title>
  </head>
  <body>

    <?php
      function helloName($name="Ved"){
        echo "Hello $name <br>";
      }

      helloName(); //prints out the default argument.
      helloName("Lewis Hamilton");
      helloName("Virat Kohli");
    ?>

  </body>
</html>