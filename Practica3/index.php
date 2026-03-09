<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

try{

    echo "<h2>Creando Admin</h2>";

    $admin = new Admin("Carlos", "admin@correo.com");

    echo "Nombre: " . $admin->getNombre() . "<br>";
    echo "Correo: " . $admin->getCorreo() . "<br>";
    echo "Rol: " . $admin->getRol() . "<br><br>";

    echo "<h2>Creando Alumno</h2>";

    $alumno = new Alumno("Ana", "ana@correo.com", "A12345");

    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Matrícula: " . $alumno->getMatricula() . "<br>";
    echo "Rol: " . $alumno->getRol() . "<br>";

}catch(Exception $e){

    echo "Error: " . $e->getMessage();

}

?>
