<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Returning Values</title>
  </head>
  <body>

    <?php
      function sum(int $x, int $y){
        $a = $x + $y;
        return $a;
      }

      echo "7 + 2 : " . sum(7, 2) . "<br>";
      echo "3 + 12 : " . sum(3, 12) . "<br>";
    ?>

  </body>
</html>
