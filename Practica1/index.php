<?php

require_once "Usuario.php"
  
$usuario1 = new Usuario("Karely", "karely@gmail.com");

echo "Nombre: " . $usuario1->getNombre() . "<br>";
echo "Correo: " . $usuario1->getCorreo();

