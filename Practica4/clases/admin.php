<?php

require_once 'Usuario.php';

class Admin extends Usuario
{
    private $nivel;

    public function __construct($nombre, $email, $nivel)
    {
        parent::__construct($nombre, $email);
        $this->nivel = $nivel;
    }

    public function getNivel()
    {
        return $this->nivel;
    }
}
