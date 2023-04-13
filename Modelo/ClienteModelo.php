<?php
require_once 'Modelo.php';
class ClienteModelo extends Modelo{

    public function get($id=''){
        if($id==''){
            $query="SELECT * from  cliente";
            return $this->getQuery($query);
        }
        else{
            $query="SELECT * FROM cliente WHERE id_cliente=:id_cliente";
            return $this->getQuery($query,['id_cliente'=>$id]);
        }
        
    }

    public function insertCliente($cliente=array()){
        $query="INSERT INTO `cliente` ( `id_usuario`, `nombre`, `fechanacimiento_cliente`, `identificacion_cliente`, `estado_cliente`) VALUES(:id_usuario,:nombre,:fechanacimiento_cliente,:identificacion_cliente,1)";
         echo $this->setQuery($query,$cliente);

    }

    public function maxCliente(){
        $query="SELECT MAX(id_cliente)FROM cliente";
        return $this->getQuery($query);
    }

    public function updateCliente($cliente=array()){
        $query="UPDATE cliente SET nombre=:nombre, identificacion_cliente=:identificacion_cliente WHERE id_usuario=:id_usuario";
        return $this->setQuery($query,$cliente);

    }

    public function removeEmpresa($id){
        $query="DELETE FROM cliente WHERE id_cliente=:id_cliente";
        return $this->setQuery($query,['id_cliente'=>$id]);
    }

}