<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
  </head>
  <body>

    <?php
      $teams = array("MercedesAMG F1", "Scuderria Ferrari F1", "Redbull Racing F1");
      $arrlength = count($teams);

        for($x=0;$x<$arrlength;$x++){
            echo $teams[$x];
            echo "<br>";
        }

    ?>

  </body>
</html>
