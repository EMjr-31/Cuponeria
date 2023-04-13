<?php

use Svg\Tag\Path;

require_once 'Controlador.php';
require_once './Modelo/CuponModelo.php';
class CarritoControlador extends Controlador{

    private $model;

    function __construct(){
        $this->model=new CuponModelo();
    }

    public function comprar(){
        $this->render("carrito.php");
    }
    public function generar(){
        $this->render("generar.php");
    }
    
    public function abrirPdf($archivo){
        header("Content-type: application/pdf");
        readfile(PATH.'/Vista/dompdf/'.$archivo);
    }
}