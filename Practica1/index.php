<?php

require_once "Usuario.php"
  
$usuario = new Usuario("Karely", "karely@gmail.com");

echo "Nombre: " . $usuario1->getNombre() . "<br>";
echo "Correo: " . $usuario1->getCorreo();

