<head> 
    <link rel="stylesheet" type="text/css" href="../css/style_php.css"> 
</head>

<?php
    include_once('../clases/Cobros.php');
    $cobros = new Cobros();


    //atributos de persona
    $cobros->asignarNombre($_POST['txtNombre']);
    $cobros->apellido=$_POST['txtApellido'];
    $cobros->telefono=$_POST['txtTelefono'];
    $cobros->direccion=$_POST['txtDireccion'];
    //atributos de empleado    
    $cobros->codigo=$_POST['txtCodigo'];
    $cobros->nivelAcademico=$_POST['txtNivelAcademico'];
    $cobros->sueldoBase=$_POST['txtSueldoBase'];
    //atributos de clase
    $cobros->bonificacion=$_POST['txtBonificacion'];
    $cobros->comisionCobro=$_POST['txtComisionCobro'];

    echo "<form>
            <h3>{$cobros->verDatos()}</h3>
        </form>";


?>