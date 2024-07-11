<?php
    include_once('Empleado.php');
    class Ventas extends Empleado{
        public $tipoContratacion="";
        public $comisionVenta=0;

        public function calcularSueldoLiquido(){
            $sueldoLiquido = parent::calcularSueldoLiquido() + $this->comisionVenta;
            return $sueldoLiquido;
        }
        public function verDatos(){
            return parent::verDatos()
                ."<br>Tipo Contratación: ". $this->tipoContratacion
                ."<br>comisión: ". $this->comisionVenta;
        }
    }
?>