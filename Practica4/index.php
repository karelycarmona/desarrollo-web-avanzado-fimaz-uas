<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

try{

$admin = new Admin("Karely","karely@correo.com",7);
$alumno = new Alumno("Juan","juan@correo.com","A001");
$invitado = new Invitado("Luis","luis@correo.com","1234");

echo "<table border='1'>";

echo "<tr>
<th>Tipo</th>
<th>Nombre</th>
<th>Email</th>
<th>Extra</th>
</tr>";

echo "<tr>
<td>Admin</td>
<td>".$admin->getNombre()."</td>
<td>".$admin->getEmail()."</td>
<td>Nivel ".$admin->getNivel()."</td>
</tr>";

echo "<tr>
<td>Alumno</td>
<td>".$alumno->getNombre()."</td>
<td>".$alumno->getEmail()."</td>
<td>".$alumno->getMatricula()."</td>
</tr>";

echo "<tr>
<td>Invitado</td>
<td>".$invitado->getNombre()."</td>
<td>".$invitado->getEmail()."</td>
<td>".$invitado->getCodigo()."</td>
</tr>";

echo "</table>";

}catch(Exception $e){

echo "Error: ".$e->getMessage();

}
