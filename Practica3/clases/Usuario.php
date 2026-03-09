<?php

class Usuario {

    protected $nombre;
    protected $correo;

    public function __construct($nombre, $correo){

        if(empty($nombre)){
            throw new Exception("El nombre no puede estar vacío");
        }

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Correo inválido");
        }

        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getCorreo(){
        return $this->correo;
    }

}
