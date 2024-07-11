<?php
    include_once('Empleado.php');
    class Administracion extends Empleado{
        public $bonificacion=0;
        
        public function calcularSueldoLiquido(){
            $sueldoLiquido = parent::calcularSueldoLiquido() + $this->bonificacion;
            return $sueldoLiquido;
        }
      
        public function verDatos(){
            return parent::verDatos()
                ."<br>Bonificación: ". $this->bonificacion
                ."<br>Sueldo Líquido: ". $this->calcularSueldoLiquido();
        }
        
    }
?>