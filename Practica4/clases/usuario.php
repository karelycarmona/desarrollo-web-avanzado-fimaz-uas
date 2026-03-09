<?php

require_once __DIR__ . '/../excepciones/ValidacionException.php';

class Usuario
{
    protected $nombre;
    protected $email;

    public function __construct($nombre, $email)
    {
        $this->setNombre($nombre);
        $this->setEmail($email);
    }

    public function setNombre($nombre)
    {
        if (empty($nombre)) {
            throw new ValidacionException("El nombre no puede estar vacío");
        }

        $this->nombre = $nombre;
    }

    public function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new ValidacionException("Email inválido");
        }

        $this->email = $email;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
