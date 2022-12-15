<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>
  </head>
  <body>

    <?php
      $age = array("Jason Bourne"=>"45", "John Wick"=>"55", "John Price"=>"35");

        foreach($age as $x=>$val){
            echo "$x : $val <br>";
        }
    ?>

  </body>
</html>
