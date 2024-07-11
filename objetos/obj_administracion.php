<head> 
  <link rel="stylesheet" type="text/css" href="../css/style_php.css"> 
</head>

<?php
    //referencia al archivo donde esta la clase
    include_once('../clases/Administracion.php');
    $admin = new Administracion();

    //atributos de persona
    $admin->asignarNombre($_POST['txtNombre']);
    $admin->apellido=$_POST['txtApellido'];
    $admin->telefono=$_POST['txtTelefono'];
    $admin->direccion=$_POST['txtDireccion'];
    //atributos de empleado    
    $admin->codigo=$_POST['txtCodigo'];
    $admin->nivelAcademico=$_POST['txtNivelAcademico'];
    $admin->sueldoBase=$_POST['txtSueldoBase'];
    //atributos de clase
    $admin->bonificacion=$_POST['txtBonificacion'];

    echo "<form>
            <h3>{$admin->verDatos()}</h3>
        </form>";
?>