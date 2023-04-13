<?php
require_once 'Controlador.php';
require_once './Modelo/UsuarioModelo.php';
require_once './Modelo/ClienteModelo.php';
class UsuarioControlador extends Controlador{

    private $model;

    function __construct(){
        $this->model=new UsuarioModelo();
    }

    public function login(){
        $viewBag=array();
        $usuario=$this->model->get();
        $viewBag['usuario']=$usuario;
        $this->render("index.php",$viewBag);
    }

    public function delete($id){
        $cod= explode('.',$id)[0];
        $this->model->removeUsurio($cod);
    }

    public function insertUsuario(){
        $errores=array();

    }

    public function correo($correo){
        $errores=array();
        if($this->model->validateCorre($correo)==1){
            array_push($errores,'El correo ya esta registrado');
        }
        var_dump($errores);
    }
}