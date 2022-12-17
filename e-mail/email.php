<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail</title>
  </head>
  <body>

    <?php

    //!!!!!!TBC!!!!!!
      $to = "vedbulsara9@gmail.com";
      $subject = "First email using PHP";

      $message = "<b>Hello Ved!<b>";
      $header = "From:vedbulsara7@gmail.com \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";

      $retval = mail ($to, $subject, $message, $header);

      if($retval==true){
        echo "Email sent successfully!";
      }
      else{
        echo "Email not sent!";
      }


    ?>

  </body>
</html>
