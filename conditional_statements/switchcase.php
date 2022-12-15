<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switchcase</title>
  </head>
  <body>

    <?php
      $day=date("D");

        switch($day){
          
          case "Mon":
            echo "Today is Monday : Study!";
            break;
          case "Tue";
            echo "Today is Tuesday : By some food";
            break;
          case "Wed";
            echo "Today is Wednesday : Clean the houese";
            break;
          case "Thu";
            echo "Today is Thursday : Repair your car";
            break;
          case "Fri";
            echo "Today is Friday : Go out with friends!";
            break;
          case "Sat";
            echo "Today is Saturday : Watch Formula1 Qualifying";
            break;
          case "Sun";
            echo "Today is Sunday : Watch Formula1 Race";
            break;
        }  
    ?>

  </body>
</html>