<?php 
    class Persona{
        //atributos
        private $nombre="";
        public $apellido="";
        public $telefono=0;
        public $direccion="";
        // setter & getter son métodos de acceso
        //método para asignar = método set
        public function asignarNombre($valor){
            $this->nombre=$valor;
        }
        //método para obtener = get
        public function verNombre(){
            return $this->nombre;
        }
        public function nombreCompleto(){
            return "Nombre completo: " . $this->nombre . " ". $this->apellido;
        }
        public function verDatos(){
            return "<br>Nombre completo: " . $this->nombre . " ". $this->apellido
                ."<br> Teléfono: ".$this->telefono
                ."<br> Dirección: ". $this->direccion;
        }

    }
?>