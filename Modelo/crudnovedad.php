<?php
require_once('conexion.php');
class crudnovedad{

    public function __construct(){

    }
    public function listarnovedad(){
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Definir el la sentencia sql
        //sql: Struct Query Language: Lenguaje Estructurado de Consulta
        $sql = $baseDatos->query('SELECT * FROM novedad');
        //Ejecutar la consulta
        $sql->execute();
        Conexion::desconectar($baseDatos);
        return($sql->fetchAll()); //retornar todos los registros de la consulta.
    }
    public function eliminarnovedad(){
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Definir el la sentencia sql
        //sql: Struct Query Language: Lenguaje Estructurado de Consulta
        $sql = $baseDatos->query('DELETE INTO * FROM novedad');
        //Ejecutar la consulta
        $sql->execute();
        Conexion::desconectar($baseDatos);
        return($sql->fetchAll()); //retornar todos los registros de la consulta.
    }
    public function registrarnovedad($novedad){
        $mensaje = "";
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Preparar la sentencia sql
        $sql = $baseDatos->prepare('INSERT INTO 
        NOVEDAD(IdReporte, IdAmbiente, IdTipoNovedad, Descripcion, FechaRegistro)
        VALUES(:IdReporte, :IdAmbiente, :IdTipoNovedad, :Descripcion, :FechaRegistro) ');
        $sql->bindValue('IdReporte', '');
        $sql->bindValue('IdAmbiente',$novedad->getidambiente());
        $sql->bindValue('IdTipoNovedad',$novedad->getidtiponovedad());
        $sql->bindValue('Descripcion',$novedad->getfecharegistro());
        try{
            $sql->execute(); //Ejecutar el sql
            $mensaje ="Registro Exitoso";
        }
        catch(Excepcion $error){
            $mensaje = $error->getMessage(); //Obtener el mensaje de error.
        }
        Conexion::desconectar($baseDatos); //Cierra la conexión.
        return $mensaje;
    }
}
?>