<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested If</title>
  </head>
  
  <body>

    <?php
      $nationality="Indian";
      $age=18;

        if($nationality=="Indian"){
            if($age==18){
                echo "You are eligible to vote!";
            }
        }
        else{
            echo "You are not eligible to vote!";
        }
    ?>
    
  </body>
</html>
