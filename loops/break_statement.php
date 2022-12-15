<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break Statement</title>
  </head>
  <body>

    <?php
      for($x=0;$x<10;$x++){
        echo "The number is : $x <br>";
        if($x==8){
            break;
        }
      }
    ?>

  </body>
</html>
