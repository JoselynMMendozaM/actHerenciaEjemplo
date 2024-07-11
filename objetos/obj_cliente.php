<head> 
  <link rel="stylesheet" type="text/css" href="../css/style_php.css"> 
</head>

<?php
    //incluir el archivo Cliente.php para poder utilizar
    //el código que contienen
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo Cliente = instanciar la clase
    $cliente = new Cliente();
    
    $cliente->nit=$_GET['txtNit'];
    $cliente->asignarNombre($_GET['txtNombre']);
    $cliente->apellido=$_GET['txtApellido'];
    $cliente->telefono=$_GET['txtTelefono'];
    $cliente->direccion=$_GET['txtDireccion'];
    
    echo "<form>
            <h3>{$cliente->verDatos()}</h3>
        </form>";

?>