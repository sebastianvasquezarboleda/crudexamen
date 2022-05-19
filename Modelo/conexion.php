<?php

class Conexion{
    private static $conexion = null;

    public function __construct(){}

    public static function conectar(){
        $host = "Localhost";
        $dbname = "crudexamen";
        $user = "root";
        $password = "";

        $txtConexion = "mysql:host=".$host.";dbname=".$dbname.";charset=utf8";

        try{
          self::$conexion = new PDO($txtConexion,$user,$password);
          self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        }
        catch(Exception $error){
            self::$conexion = "Conexion Fallida";
            echo "ERROR: ". $error->getMessage();
        }
        return self::$conexion;
    }

    static function desconectar(&$conexion){
        $conexion = null;
    }
}
$baseDatos = Conexion::conectar();
?>