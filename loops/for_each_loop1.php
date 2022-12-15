<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>
  </head>
  <body>

    <?php
      $cities = array("Vancouver","Bombay","Toronto","Calgary","Edmonton");

        foreach($cities as $city){
            echo "$city <br>";
        }
    ?>

  </body>
</html>
