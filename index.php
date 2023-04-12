<?php
include_once 'Core/config.php';
require_once 'Controlador/CuponControlador.php';
require_once 'Controlador/EmpresaControlador.php';
session_start();
$url=$_SERVER['REQUEST_URI'];
$url=explode("/",$url);
$controller=empty($url[2])?"Index":$url[2];
$controller.="Controlador";
$fileController="Controlador/$controller.php";
$method=empty($url[3])?"index":$url[3];
$param=empty($url[4])?"":$url[4];
$controlador=new $controller();
$controlador->$method($param);
