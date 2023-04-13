<?php
require_once 'Controlador.php';
require_once './Modelo/VentaModelo.php';
class VentaControlador extends Controlador{

    private $model;

    function __construct(){
        $this->model=new VentaModelo();
    }

    public function Index(){
        $ventas=$this->model->get();
        var_dump($ventas);
    }
    
}