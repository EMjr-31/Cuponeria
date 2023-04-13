<?php
require_once 'Controlador.php';
require_once './Modelo/UsuarioModelo.php';
require_once './Modelo/ClienteModelo.php';
require_once './Modelo/VentaModelo.php';
require_once './Core/validaciones.php';
class UsuarioControlador extends Controlador{

    private $model;

    function __construct(){
        $this->model=new UsuarioModelo();
    }

    public function login(){
        $this->render("index.php");
    }
    public function perfil(){
        $viewBag=array();
        $ventaModelo= new VentaModelo();
        $viewBag['ventas']=$ventaModelo->get($_SESSION['login_data']['id_cliente']);

        $this->render("usuario.php", $viewBag);
    }
    public function registro(){
        $this->render("registro.php");
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
                    $_SESSION['cupon'];
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
        if(isset($_POST['registrar'])){
            extract($_POST);
            $errores=array();
            $usuario=array();
            //Validacion nombre
            if(estaVacio($nombre)||!isset($nombre)){
                array_push($errores,'Debes ingresar tu nombre');
            }elseif(!(esTexto($nombre))){
                array_push($errores,'El nombre no debe contener numeros ni simbolos');
            }
            $usuario['nombre']=$nombre;
            //validacion identificacion
            if(estaVacio($identificacion_cliente)||!isset($identificacion_cliente)){
                array_push($errores,'Debes ingresar tu identifiacion');
            }elseif(!(esDUI($identificacion_cliente))){
                array_push($errores,'Identificacion incorrecto (Use "-")');
            }
            $usuario['identificacion_cliente']=$identificacion_cliente;
            //Validacion fecha 
            if(estaVacio($fechanacimiento_cliente)||!isset($fechanacimiento_cliente)){
                array_push($errores,'Debes ingresar la fecha de nacimiento');
            }
            $usuario['fechanacimiento_cliente']=$fechanacimiento_cliente;
            
            if(estaVacio($correo_usuario)||!isset($correo_usuario)){
                array_push($errores,'Debes ingresar tu correo electronico');
            }elseif(!(esCorreo($correo_usuario))){
                array_push($errores,'Ingrese un correo electronico valido ');
            }elseif($this->model->validateCorre($correo_usuario)==1){
                array_push($errores,'El correo ya esta registrado');
            }
            $usuario['correo_usuario']=$correo_usuario;
            //Validacion Contrasenia
            if(estaVacio($contrasenia_usuario)||!isset($contrasenia_usuario)){
                array_push($errores,'Debes ingresar tu contraseña');
            }elseif(estaVacio($contrasenia_usuario2)||!isset($contrasenia_usuario2))
            {
                array_push($errores,'Debes Verificar la contraseña');
            }elseif(!($contrasenia_usuario==$contrasenia_usuario2)){
                array_push($errores,'Las contrañas no coinciden');
            }
            $usuario['contrasenia_usuario']=$contrasenia_usuario;
            if(empty($errores)){
                $usu=array();
                $usu['correo_usuario']=$correo_usuario;
                $usu['contrasenia_usuario']=$contrasenia_usuario;
                if($this->model->insertUsuarios($usu)){
                    $id_usuario= $this->model->maxUsuario();
                    $cliente=array();
                    $cliente['id_usuario']=$id_usuario;
                    $cliente['nombre']=$nombre;
                    $cliente['fechanacimiento_cliente']=$fechanacimiento_cliente;
                    $cliente['identificacion_cliente']=$identificacion_cliente;
                    $clienteModelo=new ClienteModelo();
                    if($clienteModelo->insertCliente($cliente)){
                        header('location:'.PATH.'/Usuario/login');
                    }
                }
                
            }
            $viewBag['errores']=$errores;
            $viewBag['usuario']=$usuario;
            $this->render("registro.php",$viewBag);

        }else{
            array_push($errores,"Compete el formulario");
            $viewBag['errores']=$errores;
            $this->render("registro.php",$viewBag);
        }


    }


    /*
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
}*/
}