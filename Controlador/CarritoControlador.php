<?php
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
    
}