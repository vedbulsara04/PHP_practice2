<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Break</title>
  </head>
  <body>

    <?php
    $num = 0;  
      while($num<7){
        if($num==8){
            break;
        }
        echo "The number is : $num <br>";
        $num++;
      }

    ?>

  </body>
</html>
