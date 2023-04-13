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
        $this->render("index.php");
    }
    public function perfil(){
        $this->render("usuario.php");
    }

    public function inicioSesion(){
        $viewBag=array();
        $errores=array();
        $correo_usuario=trim($_POST['correo_usuario']);
        $contrasenia_usuario=trim($_POST['contrasenia_usuario']);
        if(isset($_POST['login'])){
            if(!($this->model->validateCorre($correo_usuario)==1)){
                array_push($errores,'El correo no esta registrado');
            }
            if(empty($errores)){
                if($this->model->validateUsuario( $correo_usuario,$contrasenia_usuario)){
                    $login_data=$this->model->validateUsuario( $correo_usuario,$contrasenia_usuario);
                    $login_data=$login_data[0];
                    $_SESSION['login_data']=$login_data;
                    header('location:'.PATH."/Cupon");
                }else{
                    array_push($errores,"El usuario y/o password son incorrectos");
                    $viewBag['errores']=$errores;
                    $this->render("index.php",$viewBag);
                }
            }
            $viewBag['errores']=$errores;
            $this->render("index.php",$viewBag);
        }else{
            array_push($errores,"Compete el formulario");
            $viewBag['errores']=$errores;
            $this->render("index.php",$viewBag);
        }

    }
    public function logout(){
        session_unset();
        session_destroy();
        header('location:'.PATH.'/Usuario/login');

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
        
        var_dump($errores);
    }

    //Contra
    public function contra($contraseña_usuario) {
        $errores=array();
        if(!validateContra($contraseña_usuario)) {
            array_push($errores['contraseña_usuario'] = 'La contraseña debe tener al menos 8 caracteres');
          }
    }

    //Fecha
    public function fechaC($fecha_creacion_actual) {
      $errores=array();
      if (!validar_fecha_creacion_usuario($fecha_creacion)) {
       array_push($errores['fecha_creacion'] = 'Ingrese una fecha de creación de usuario válida en el formato YYYY-MM-DD hh:mm:ss y que sea anterior o igual a la fecha actual');
    }
}