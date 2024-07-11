<?php
    include_once('../clases/Empleado.php');
    $emple = new Empleado();
    //atributos de la clase Empleado    
    $emple->codigo=123;
    $emple->nivelAcademico="Técnico FullStack";
    $emple->sueldoBase=1000;

    //atributos que hereda de la clase Persona
    $emple->asignarNombre('Fulanito');
    $emple->apellido="de Tal";
    $emple->telefono=12345678;
    $emple->direccion="Zona 5";

    echo "Sueldo liquido: ". $emple->calcularSueldoLiquido();
    echo $emple->verDatos();
    
?>