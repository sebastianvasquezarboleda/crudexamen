<?php
require_once('../Modelo/novedad.php');
require_once('../Modelo/crudnovedad.php');

class controladornovedad{
    public function __construct(){

    }

    public function listarnovedad(){
        //Crear un objeto de la clase categoria
        $crudnovedad = new crudnovedad();
        return $crudnovedad->listarnovedad();
    }
    public function eliminarnovedad($idreporte){
        //Crear un objeto de la clase categoria
        $crudnovedad = new crudnovedad();
        $novedad = new novedad();
        $novedad->setidreporte($idreporte);
        $novedad->setidambiente('');
        $novedad->setidtiponovedad('');
        $novedad->setdescripcion('');
        $novedad->setfecharegistro('');
        $mensaje = $crudnovedad->eliminarnovedad($novedad);
        echo $mensaje;
    }
    public function registrarnovedad($idreporte,$idambiente, $idtiponovedad,$descripcion, $fecharegistro){
        //Crear un objeto de la clase categoria
        $crudnovedad = new crudnovedad();
        $novedad = new novedad();
        $novedad->setidreporte('');
        $novedad->setidambiente('');
        $novedad->setidtiponovedad('');
        $novedad->setdescripcion($descripcion);
        $novedad->setfecharegistro($fecharegistro);
        $novedad = $crudnovedad->registrarnovedad($idreporte,$idambiente, $idtiponovedad,$descripcion, $fecharegistro);
        echo $mensaje;
    }
}
$controladornovedad = new controladornovedad();
if (isset($_POST['registrar'])){ //Si la variable existe 
    //Recibir variables del formulario
    $descripcion = $_POST['descripcion'];
    $fecharegistro = $_POST['fecharegistro'];
    $controladornovedad->registrarnovedad($idreporte,$idambiente, $idtiponovedad,$descripcion, $fecharegistro);
}
?>