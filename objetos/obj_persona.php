<?php 
    //referencia al archivo donde esta la clase
    include_once('../clases/Persona.php');
    //instanciar la clase = crear un objeto
    $persona = new Persona();
    //asigne valor al atributo apellido el cual es publico
    $persona->apellido="Escobar";
    //mostrarndo el contenido del atributo apellido el cual es public
    echo "<br>Apellido: ". $persona->apellido;
    $persona->telefono=22334455;
    $persona->direccion="Calle Doroteo Guamuch Flores 7-51 zona 5";
    //asignado nombre por medio de un método porque el atributo es privado
    $persona->asignarNombre("Mynor");
    //mostrar contenido del atributo nombre,es privado por eso uso un método
    
    echo "<br>Nombre: ". $persona->verNombre();
    echo "<br>".$persona->nombreCompleto();
    echo "<br>".$persona->verDatos();

?>