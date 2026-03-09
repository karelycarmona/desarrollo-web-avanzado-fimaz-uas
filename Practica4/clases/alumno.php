<?php

require_once 'Usuario.php';

class Alumno extends Usuario
{
    private $matricula;

    public function __construct($nombre, $email, $matricula)
    {
        parent::__construct($nombre, $email);
        $this->setMatricula($matricula);
    }

    public function setMatricula($matricula)
    {
        if (empty($matricula)) {
            throw new Exception("La matrícula no puede estar vacía");
        }

        $this->matricula = $matricula;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }
}
