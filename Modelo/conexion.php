<?php
class Conexion{
    private static $conexion = NULL;
    private $host = 'localhost';
    private $baseDatos = 'crudexamen';
    private $usuario = 'root';
    private $contrasena = '';
   

    private function __construct(){}

    public static function conectar(){
        //Verifica errores
        $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
        self::$conexion = new PDO('mysql:host=127.0.0.1;dbname=crudexamen','root','',$pdo_options);
        return self::$conexion;
    }

    static function desconectar(&$conexion){
        $conexion = null;
    }
}

$baseDatos = Conexion::conectar();

?>