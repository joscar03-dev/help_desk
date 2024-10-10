<?php

    session_start();
    class Conectar {

        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO('mysql:host=localhost;dbname=help_desk', 'root', '');
                return $conectar;

            }catch(Exception $e)
            {
                print "¡ERROR BD: " . $e->getMessage() . "</br>";
                die();
            }
        }

        public function set_name(){
            return $this->dbh->query("SET NAMES 'UTF8'");
        }
        
        public function ruta(){
            return "http://localhost/help_desk/";
        }
    }


?>