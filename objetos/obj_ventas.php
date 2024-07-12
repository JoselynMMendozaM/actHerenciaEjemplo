
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style_html.css"> 
</head>
<body>
    <div class="container">
        <h1 class="py-5">Ventas</h1>
        <div class="row justify-content-center py-5">
            <div class="col col-8">
                <form action="../objetos/obj_ventas.php" method="post" class="p-3 bg-dark text-white rounded-5">
                    <h1>DATOS</h1>
                    <?php
                        include_once('../clases/Ventas.php');
                        $ventas = new Ventas();

                        $ventas->tipoContratacion=$_POST['txtTipoContratacion'];
                        $ventas->comisionVenta=$_POST['txtComisionVenta'];
                        //atributos que hereda de la clase empleado y persona
                        //empleado    
                        $ventas->codigo=$_POST['txtCodigo'];
                        $ventas->nivelAcademico=$_POST['txtNivelAcademico'];
                        $ventas->sueldoBase=$_POST['txtSueldoBase'];
                        //persona
                        $ventas->asignarNombre($_POST['txtNombre']);
                        $ventas->apellido=$_POST['txtApellido'];
                        $ventas->telefono=$_POST['txtTelefono'];
                        $ventas->direccion=$_POST['txtDireccion'];

                        echo "<form>
                                <h5>{$ventas->verDatos()}</h5>
                            </form>";

                    ?>
                    
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>