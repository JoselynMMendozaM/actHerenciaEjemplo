<head> 
    <link rel="stylesheet" type="text/css" href="../css/style_php.css"> 
</head>

<?php 
    //referencia al archivo donde esta la clase
    include_once('../clases/Persona.php');
    $persona = new Persona();

    //asignado nombre por medio de un método porque el atributo es privado
    $persona->asignarNombre($_GET['txtNombre']);
    //instanciar la clase = crear un objeto
    $persona->apellido=$_GET['txtApellido'];
    $persona->telefono=$_GET['txtTelefono'];
    $persona->direccion=$_GET['txtDireccion'];


    echo "<form>
            <h3>{$persona->verDatos()}</h3>
        </form>";


?>