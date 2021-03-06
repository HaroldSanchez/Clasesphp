<?php

    class Database {

        public $db;
            private static $dns = "mysql:host=localhost;dbname=mqueencars"; 
            private static $user = "root";  
            private static $pass = "";      
            private static $instance;      

        public function __construct() {
            $this->db = new PDO(self::$dns, self::$user, self::$pass);         
        }

        public static function getInstance() {
            if(!isset(self::$instance)) {
                $object = __CLASS__;
                self::$instance = new $object;
            }

                return self::$instance;
        }

        public function insertar($nombre, $apellido, $edad, $categoria, $vehiculo, $modelo, $numerocompetidor) {


            try {
                $conexion = Database::getInstance(); 
                $query = $conexion->db->prepare("INSERT INTO jugadores (nombre, apellido, edad, categoria, vehiculo, modelo, numerocompartidor) VALUES (:nombre, :apellido, :edad, :categoria, :vehiculo, :modelo, :numerocompetidor)");
                $query->execute(
                    array(

                        ':nombre'     => $nombre,
                        ':apellido'   => $apellido,
                        ':edad'       => $edad,
                        ':categoria'  => $categoria,
                        ':vehiculo'   => $vehiculo,
                        ':modelo'     => $modelo,
                        ':numerocompetidor'    => $numerocompetidor

                    )
                );

                return 1; 

            } catch(PDOException $error){

                return 0; 
            }
        }

    }

?>