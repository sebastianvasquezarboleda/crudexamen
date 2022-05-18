<?php

class ambiente{
    private $idambiente;
    private $descripcion;
    private $numerocomputadores;


    public function __construct(){
    }
    public function setidambiente($idambiente){
        $this->idambiente = $idambiente;
    }

    public function setdescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function setnumerocomputadores($numerocomputadores){
        $this->numerocomputadores = $numerocomputadores;
    }

    public function getidambiente(){
        return $this->idambiente;
    }

    public function getdescripcion(){
        return $this->descripcion;
    }

    public function getnumerocomputadores($numerocomputadores){
        return $this->numerocomputadores;
    }

}

?>