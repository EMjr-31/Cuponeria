<?php
include_once 'Core/config.php';
require_once 'Controlador/CuponControlador.php';
require_once 'Controlador/EmpresaControlador.php';
require_once 'Controlador/UsuarioControlador.php';
require_once 'Controlador/CarritoControlador.php';
session_start();
$url=$_SERVER['REQUEST_URI'];
$url=explode("/",$url);
$controller=empty($url[2])?"Index":$url[2];
if(!($url[2]=="")){
    $controller.="Controlador";
    $fileController="Controlador/$controller.php";
    $method=empty($url[3])?"index":$url[3];
    $param=empty($url[4])?"":$url[4];
    if(!is_file($fileController)){
        echo "<h1>Error 404  - Controlador no existe</h1>";
        exit;
    }
    $controlador=new $controller();
    if(!method_exists($controlador,$method)){
        echo "<h1>Error 404 - Metodo no existe</h1>";
        exit;
    }
    $controlador->$method($param);   

}else{
    header('location:'.PATH."/Cupon/Principal");
}


