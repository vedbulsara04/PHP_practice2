<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If ELse</title>
  </head>
  
  <body>
    
    <?php
      $num1 = 41;
      $num2 = 27;
      $num3 = 27;

      if(($num1&&$num2)%2==0){
        echo "$num1 and $num2 are Even numbers!";
      }
      else{
        echo "$num1 and $num2 are Odd numbers";
      }
    ?>

  </body>
</html>