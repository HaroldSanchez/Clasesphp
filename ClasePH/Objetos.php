<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>

</head>
<body>
    <?php
    class Persona {

        public $nombre;
        public $apellidos;
        public $edad;
        public $numId;


        public function info(){

            $info = "";

            $info .= "<p>".$this->nombre."</p>";
            $info .= "<p>".$this->apellidos."</p>";
            $info .= "<p>".$this->edad."</p>";
            $info .= "<p>".$this->numId."</p>";


            return $info;
        }


    }
    $persona = new Persona();
        $persona->nombre = "harold";
            $persona->apellido = "sanchez";
                $persona->edad = "17";
                    $persona->numId = "11242545463";

    echo $persona->info();
    ?>
</body>
</html>