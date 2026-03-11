<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

$usuarios = [];

try{

    $admin = new Admin("Karely", "karely@gmail.com");
    $usuarios[] = $admin;

    $alumno = new Alumno("Sayda", "sayda@gmail.com", "A1234");
    $usuarios[] = $alumno;

    // correo inválido para probar excepción
    $alumnoError = new Alumno("Pedro", "correo-invalido", "C72N");
    $usuarios[] = $alumnoError;

}catch(Exception $e){
    echo "<p style='color:red;'>Error: ".$e->getMessage()."</p>";
}

echo "<h2>Lista de Usuarios</h2>";

echo "<table border='1'>
<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matrícula</th>
</tr>";

foreach($usuarios as $u){

    echo "<tr>";
    echo "<td>".$u->getNombre()."</td>";
    echo "<td>".$u->getCorreo()."</td>";
    echo "<td>".$u->getRol()."</td>";

    if(method_exists($u,'getMatricula')){
        echo "<td>".$u->getMatricula()."</td>";
    }else{
        echo "<td>-</td>";
    }

    echo "</tr>";
}

echo "</table>";

