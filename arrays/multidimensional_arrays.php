<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
  </head>
  <body>

    <?php
      $cars = array(
        array("Mercedes AMG",55,52),
        array("Ferrari",45,38),
        array("Koenigsegg",12,5)
      );

        echo $cars[0][0] . ": In stock :". $cars[0][1]. "Total sold : ". $cars[0][2] . "<br>";
        echo $cars[1][0] . ": In stock :". $cars[1][1]. "Total sold : ". $cars[1][2] . "<br>";
        echo $cars[2][0] . ": In stock :". $cars[2][1]. "Total sold : ". $cars[2][2] . "<br>";
    ?>

  </body>
</html>
