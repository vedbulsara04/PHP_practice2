<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>

    <?php
      class Fruit{
        public $name;
        public $color;

            function set_name($name){
                $this->name = $name;
            }
            function get_name(){
                return $this->name;
            }

            function set_color($color){
                $this->color = $color;
            }
            function get_color(){
               return $this->color;
            }
      }

    $mango = new Fruit();
    $mango->set_name('Mango');
    $mango->set_color('Yellow');

    echo "Name of Fruit : " . $mango->get_name();
    echo "<br>";
    echo "Color of the Fruit : " . $mango->get_color();
    ?>

  </body>
</html>
