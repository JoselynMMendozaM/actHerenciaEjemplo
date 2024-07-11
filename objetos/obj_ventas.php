<head> 
    <link rel="stylesheet" type="text/css" href="../css/style_php.css"> 
</head>

<?php
    include_once('../clases/Ventas.php');
    $ventas = new Ventas();

    $ventas->tipoContratacion="Empleado permanente";
    $ventas->comisionVenta=1000;
    //atributos que hereda de la clase empleado y persona
    //empleado    
    $ventas->codigo=123;
    $ventas->nivelAcademico="Técnico FullStack";
    $ventas->sueldoBase=1000;
    //persona
    $ventas->asignarNombre('Fulanito');
    $ventas->apellido="de Tal";
    $ventas->telefono=12345678;
    $ventas->direccion="Zona 5";

    echo "<form>
            <h3>{$ventas->verDatos()}</h3>
        </form>";

?>