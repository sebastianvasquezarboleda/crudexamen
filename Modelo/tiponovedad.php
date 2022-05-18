<?php
class tiponovedad{
    private $idtiponovedad;
    private $nombre;


    public function __construct(){
    }
    public function setidtiponovedad($idtiponovedad){
        $this->idtiponovedad = $idtiponovedad;
    }

    public function setnombre($Nombre){
        $this->nombre = $nombre;
    }

    public function getidtiponovedad(){
        return $this->idtiponovedad;
    }

    public function getnombre(){
        return $this->nombre;
    }

}

?>