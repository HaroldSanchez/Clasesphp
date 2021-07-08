<?php
    include_once("BDconexion.php");

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['categoria']) && isset($_POST['vehiculo']) && isset($_POST['modelo']) && isset($_POST['numerocompetidor'])) {

        if($_POST['nombre'] !== "" && $_POST['apellido'] !== "" && $_POST['edad'] !== "" && $_POST['categoria'] !== ""  && $_POST['vehiculo'] !== ""  && $_POST['modelo'] !== ""  && $_POST['numerocompetidor'] !== "") {

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $categoria = $_POST['categoria'];
            $marcacoche = $_POST['vehiculo'];
            $modelo = $_POST['modelo'];
            $numcomp = $_POST['numerocompetidor'];

            $conexion = new Database;
            $confirm = $conexion->insertar($nombre, $apellido, $edad, $categoria, $numerocompetidor, $modelo, $numerocompetidor);
        } else {

            $confirm = 2; 

        }


    }

    header('Location: ../index.php?confirm='.$confirm)

?>
