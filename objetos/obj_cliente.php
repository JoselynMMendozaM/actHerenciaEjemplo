<?php
    //incluir el archivo Cliente.php para poder utilizar
    //el código que contienen
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo Cliente = instanciar la clase
    $cliente = new Cliente();
    
    $cliente->nit="112233-4";
    $cliente->telefono=12345678;
    $cliente->apellido="Prueba";
    $cliente->asignarNombre("Cliente");
    $cliente->direccion="Zona 1";
    
    echo $cliente->verDatos();
    //echo "<br>". $cliente->nombreCompleto();
?>