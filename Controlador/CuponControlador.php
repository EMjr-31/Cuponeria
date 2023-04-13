<?php
require_once 'Controlador.php';
require_once './Modelo/CuponModelo.php';
class CuponControlador extends Controlador{

    private $model;

    function __construct(){
        $this->model=new CuponModelo();
    }

    public function Index(){
        $viewBag=array();
        $cupones=$this->model->get();
        $viewBag['cupones']=$cupones;
        $this->render("index.php",$viewBag);
    }

    public function principal(){
        $viewBag=array();
        $cupones=$this->model->get();
        $viewBag['cupones']=$cupones;
        $this->render("principal.php",$viewBag);
    }

    public function detalles($id){
        $viewBag=array();
        $cupon_detalles=$this->model->get($id);
        $viewBag['cupon_detalles']=$cupon_detalles;
        $_SESSION['cupon']=$cupon_detalles;
        $this->render("detalleCupones.php",$viewBag);
    }


    public function add(){
        if(isset($_POST['btn'])){
            if(1==1){
                if(isset($_FILES['file'])){
                    $archivo=$_FILES['file'];
                    $archivo_nombre=$archivo['name'];
                    $archivo_tipo=$archivo['type'];
                    echo var_dump($archivo);
                    $ext= explode('.',$archivo_nombre);
                    $tipos=array("image/jpeg","image/png","image/jpg");
                    if(!in_array($archivo_tipo,$tipos)){
                        echo "No se permite ese formato de imagen o La imagen del producto no se subio";
                    }else{
                        //mover archivo
                        $nuevo_nombre=trim($_POST['id_cupon']).'.'.$ext[1];
                        move_uploaded_file($archivo['tmp_name'], $_SERVER['DOCUMENT_ROOT'].PATH.'/Vista/assets/img/'.$nuevo_nombre);
                        //agregar
                        $viewbag=array();
                        extract($_POST);
                        $errores=array();
                        $cupon=array();
                        $cupon['id_cupon']=$id_cupon;
                        $cupon['titulo_cupon']=$titulo_cupon;
                        $cupon['precio_regular_cupon']=$precio_regular_cupon;
                        $cupon['precio_oferta_cupon']=$precio_oferta_cupon;
                        $cupon['fecha_inicio_of_cupon']=$fecha_inicio_of_cupon;
                        $cupon['fecha_final_of_cupon']=$fecha_final_of_cupon;
                        $cupon['fecha_limite_cupon']=$fecha_limite_cupon;
                        $cupon['descripcion_cupon']=$descripcion_cupon;
                        $cupon['cantidad_cupon']=$cantidad_cupon;
                        $cupon['estado_cupon']=$estado_cupon;
                        $cupon['id_empresa']=$id_empresa;
                        $cupon['img']=$nuevo_nombre;
                        $this->model->insertCupon($producto);
                        //header('location:'.PATH.'/Producto');
                    }
                }else{
                    echo "La imagen del producto no se subio";
                }
            }
        
         }else{
            echo "Formularrio no completado";
         }

           
    }

    public function delete($id){
        $cod= explode('.',$id)[0];
        $this->model->removeCupon($cod);
    }


    public function buscar($cod){

        /*objeto para almacenar el producto encontrado*/
        $prod_Encontrado="";
        $prod_Encontrado=$this->model->get($cod);

        echo json_encode($prod_Encontrado);

    }

    function Compra(){
        $viewBag=array();
        $this->render("compra.php",$viewBag);
    }
    
    function update($img){
        if(isset($_POST['btn'])){
            //agregar
            $viewbag=array();
            extract($_POST);
            $errores=array();
            $producto=array();
            $producto['codigo_producto']=$codigo_producto;
            $producto['nombre_producto']=$nombre_producto;
            $producto['codigo_categoria']=$codigo_categoria;
            $producto['precio_producto']=$precio_producto;
            $producto['existencia_producto']=$existencia_producto;
            $producto['descripcion_producto']=$descripcion_producto;
                if(isset($_FILES['file']) || is_null($_FILES['file'])){
                    $archivo=$_FILES['file'];
                    $archivo_nombre=$archivo['name'];
                    $archivo_tipo=$archivo['type'];
                    $ext= explode('.',$archivo_nombre);
                    $tipos=array("image/jpeg","image/png","image/jpg");
                    if(!in_array($archivo_tipo,$tipos)){
                        $this->model->updateCupon($producto);
                    }else{
                        //mover archivo
                        $nuevo_nombre=trim($_POST['codigo_producto']).'.'.$ext[1];
                        echo unlink($_SERVER['DOCUMENT_ROOT'].PATH.'/Vista/assets/img/'.$img);
                        echo move_uploaded_file($archivo['tmp_name'], $_SERVER['DOCUMENT_ROOT'].PATH.'/Vista/assets/img/'.$nuevo_nombre);

                        $this->model->updateCupon($producto);
                        //header('location:'.PATH.'/Producto/admin');
                    }
                }
                //header('location:'.PATH.'/Producto/admin');
        }
    }
}