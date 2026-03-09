<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

try{

    echo "<h2>ADMIN</h2>";

    $admin = new Admin("Karely","karely@correo.com",3);

    echo $admin->getNombre()."<br>";
    echo $admin->getEmail()."<br>";
    echo "Nivel: ".$admin->getNivel()."<br>";

    echo "<hr>";

    echo "<h2>ALUMNO</h2>";

    $alumno = new Alumno("Juan","juan@correo.com","A001");

    echo $alumno->getNombre()."<br>";
    echo $alumno->getEmail()."<br>";
    echo "Matricula: ".$alumno->getMatricula()."<br>";

    echo "<hr>";

    echo "<h2>INVITADO</h2>";

    $invitado = new Invitado("Luis","luis@correo.com","1234");

    echo $invitado->getNombre()."<br>";
    echo $invitado->getEmail()."<br>";
    echo "Codigo: ".$invitado->getCodigo()."<br>";

}catch(Exception $e){

    echo "Error: ".$e->getMessage();
}
