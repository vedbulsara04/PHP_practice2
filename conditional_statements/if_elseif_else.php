<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Elseif ELse</title>
  </head>
  
  <body>

    <?php
      $t = date("H");

        if($t < "10"){
          echo "Good Morning!";
        }
        elseif($t<20){
          echo "Have a good day!";
        }
        else{
          echo "Good Night!";
        }
    ?>

  </body>
</html>
