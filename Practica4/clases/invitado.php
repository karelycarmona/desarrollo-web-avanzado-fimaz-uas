<?php

require_once "Usuario.php";

class Invitado extends Usuario {

    private $codigoAcceso;

    public function __construct($nombre,$email,$codigoAcceso){

        parent::__construct($nombre,$email);

        if(strlen($codigoAcceso) < 4){
            throw new Exception("El código debe tener al menos 4 caracteres");
        }

        $this->codigoAcceso = $codigoAcceso;
    }

    public function getCodigo(){
        return $this->codigoAcceso;
    }
}
