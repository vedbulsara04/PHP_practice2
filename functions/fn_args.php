<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Arguments</title>
  </head>
  <body>

    <?php
      function sayHello($name){
        echo "Hello $name";
        echo "<br><br>";
      }

      sayHello("Ved");
      sayHello("World");
    ?>
    
  </body>
</html>