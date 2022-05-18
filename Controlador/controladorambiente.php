<?php
require_once('../Modelo/ambiente.php');
require_once('../Modelo/crudambiente.php');
class controladorambiente{
    public function __construct(){
    }
    public function registrarambiente($descripcion){
        //Crear un objeto de la clase categoria
        $crudambiente = new crudambiente();
        $ambiente = new ambiente();
        $ambiente->setidambiente('');
        $ambiente->setdescripcion($descripcion);
        $mensaje = $crudambiente->registrarambiente($ambiente);
        echo $mensaje;
    }
}
    $controladorambiente = new controladorambiente();
if (isset($_POST['registrar'])){ //Si la variable existe 
    //Recibir variables del formulario
    $descripcion = $_POST['descripcion'];
    $numerocomputadores = $_POST['numerocomputadores'];
    $controladorambiente->registrarambiente($descripcion);
}
