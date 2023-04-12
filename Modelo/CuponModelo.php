<?php
require_once 'Modelo.php';
class CuponModelo extends Modelo{

    public function get($id=''){
        if($id==''){
            $query="SELECT * from  cupon";
            return $this->getQuery($query);
        }
        else{
            $query="SELECT * FROM Cupon WHERE id_cupon=:id_cupon";
            return $this->getQuery($query,['id_cupon'=>$id]);
        }
        
    }

    public function insertCupon($usuario=array()){
        $query="INSERT INTO cupon VALUES (:id_cupon,:titulo_cupon,:precio_regular_cupon,:precio_oferta_cupon,:fecha_inicio_of_cupon,:fecha_final_of_cupon,:fecha_limite_cupon,:descripcion_cupon,:cantidad_cupon,:estado_cupon,:id_empresa:img)";
         echo $this->setQuery($query,$usuario);
        

    }

    public function updateCupon($usuario=array()){
        $query="UPDATE cupon SET id_cupon=:id_cupon, titulo_cupon=:titulo_cupon, precio_regular_cupon=:precio_regular_cupon,precio_oferta_cupon=:precio_oferta_cupon,fecha_inicio_of_cupon=:fecha_inicio_of_cupon, fecha_final_of_cupon=:fecha_final_of_cupon,fecha_limite_cupon=:fecha_limite_cupon,descripcion_cupon=:descripcion_cupon,cantidad_cupon=:cantidad_cupon,estado_cupon=:estado_cupon WHERE codigo_producto=:codigo_producto";
        return $this->setQuery($query,$usuario);

    }

    public function removeCupon($id){
        $query="DELETE FROM cupon WHERE id_cupon=:id_cupon";
        return $this->setQuery($query,['id_cupon'=>$id]);
    }

}