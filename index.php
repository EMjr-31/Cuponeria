<?php
session_start();
$url=$_SERVER['REQUEST_URI'];
$url=explode("/",$url);
$controller=empty($url[1])?"Index":$url[1];
$controller.="Controlador";
$fileController="Controlador/$controller.php";
$method=empty($url[2])?"index":$url[2];
$param=empty($url[3])?"":$url[3];
$controlador=new $controller();
$controlador->$method($param);
