<head> 
    <link rel="stylesheet" type="text/css" href="../css/style_php.css"> 
</head>

<?php
    include_once('../clases/Empleado.php');
    $emple = new Empleado();
    //atributos de la clase Empleado    
    $emple->codigo=123;
    $emple->nivelAcademico="Técnico FullStack";
    $emple->sueldoBase=1000;

    //atributos que hereda de la clase Persona
    //atributos de persona
    $admin->asignarNombre($_POST['txtNombre']);
    $admin->apellido=$_POST['txtApellido'];
    $admin->telefono=$_POST['txtTelefono'];
    $admin->direccion=$_POST['txtDireccion'];
    //atributos de empleado    
    $admin->codigo=$_POST['txtCodigo'];
    $admin->nivelAcademico=$_POST['txtNivelAcademico'];
    $admin->sueldoBase=$_POST['txtSueldoBase'];

    echo "<form>
            <h3>{$emple->verDatos()}</h3>
        </form>";

    
?>