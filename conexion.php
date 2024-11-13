<?php
  session_start();
  
    class Conectar{
        proptected $bdh;

        protected function Conexion(){
            try{
                $conectar = $this->$bdh = new PDO("mysql:local=localhost;dbname=paginaweb,'root'");
                return $conectar;
            }catch(Exception $e){
                print "Error BD: ".$e->getmessage()."</br>";
                die();
            }
        }
        public function set_names(){
            return $this->$bdh->query("SET NAMES 'utf8'")
        }
        public function ruta(){
            //local
            return "http://localhost/Pagina/";
            //web
            //return "https://www.sudominio.com/Pagina/";
        }
    }
?>