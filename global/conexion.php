<?php
//Cadena de conexion que obteno de config
$servidor="mysql:dbname=".BD.";host".SERVIDOR;

try
{
    //recibe como parametros el servidor el usuario y la contraseña que estan en config
    //usando codificacion para eliminar caracteres extraños
    $pdo= new PDO($servidor,USUARIO,PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
        );
        //muestro que se conecto
        //echo "<script>alert('Conectado...')</script>";
}
catch(PDOException $e)
{
    //muestro error si no me conecto
    //echo "<script>alert('Error...')</script>";
}

?>