<?php
    include_once('Persona.php');
    class Cliente extends Persona{
        public $nit="";

        public function verDatos(){
            return "<br>Nit: ". $this->nit 
                .parent::verDatos();
        }
    }
?>