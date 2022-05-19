<?php

class novedad{
    private $idreporte;
    private $idambiente;
    private $idtiponovedad;
    private $descripcion;
    private $fecharegistro;

    public function __construct(){ 
    }
    public function setidreporte($reporte){
        $this->reporte = $reporte;
    }

    public function setidambiente($idambiente){
        $this->idambiente = $idambiente;
    }

    public function setidtiponovedad($idtiponovedad){
        $this->idtiponovedad = $idtiponovedad;
    }
    public function setdescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setfecharegistro($fecharegistro){
        $this->fecharegistro = $fecharegistro;
    }

    public function getreporte(){
        return $this->reporte;
    }

    public function getidambiente(){
        return $this->idambiente;
    }

    public function getidtiponovedad(){
        return $this->idtiponovedad;
    }
    public function getdescripcion(){
        return $this->descripcion;
    }
    public function getfecharegistro(){
        return $this->fecharegistro;
    }
}

?>