<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PruebaPhP</title>
</head>
<body>
    <?php
       echo "<h1>Hola Mundo!</h1>";


       $nombre = "Harold Sanchez";
       $edad = 17;

       echo '<h3>' .$nombre.' Edad: '.$edad.' años </h3>';

       $edad .= 10;
       echo '<h3>'.$edad.'</h3>';


       if($edad > 17){
            echo '<h3>es mayor de edad</h3>';
       } else {
            echo '<h3>es menor de edad</h3>';
       }  

       for ($i = 1; $i <= 5; $i++){
        echo 'iteracion no'.$i;
       }
       function decirHola(){
        echo '<h2>Hola</h2>';
       }

       function suma(){
            $num1 = 5;
            $num2 = 10;

            return $num1 + $num2.; 
       }

       sayHi();

       echo suma();

       $array = array(
           0 => "Sara",
           1 => "Lacra",         
           2 => "Kipitos"
       );

       for($j = 0; $j < 3; $j++){
           echo $array[$j]."\n";            
       }
    ?>

    </body>
</html>