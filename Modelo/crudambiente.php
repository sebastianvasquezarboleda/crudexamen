<?php
require_once('conexion.php');
class crudambiente{

    public function __construct(){

    }
    public function registrarambiente($ambiente){
        $mensaje = "";
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Preparar la sentencia sql
        $sql = $baseDatos->prepare('INSERT INTO 
        AMBIENTE(IdAmbiente, Descripcion, NumeroComputadores)
        VALUES(:IdAmbiente, :Descripcion, :NumeroComputadores) ');
        $sql->bindValue('IdAmbiente', '');
        $sql->bindValue('Descripcion',$ambiente->getdescripcion());
        $sql->bindValue('NumeroComputadores',$ambiente->getnumerocomputadores());
        try{
            $sql->execute(); //Ejecutar el sql
            $mensaje ="Registro Exitoso";
        }
        catch(Excepcion $e){
            $mensaje = $e->getMessage(); //Obtener el mensaje de error.
        }
        Conexion::desconectar($baseDatos); //Cierra la conexión.
        return $mensaje;
    }
}
?>