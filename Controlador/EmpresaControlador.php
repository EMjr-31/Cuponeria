<?php
require_once 'Controlador.php';
require_once './Modelo/EmpresaModelo.php';
class EmpresaControlador extends Controlador{

    private $model;

    function __construct(){
        $this->model=new EmpresaModelo();
    }

    public function Index(){
        $viewBag=array();
        $empresas=$this->model->get();
        $viewBag['empresas']=$empresas;
        $this->render("index.php",$viewBag);
    }
    
}