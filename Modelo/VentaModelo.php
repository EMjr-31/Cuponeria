<?php
require_once 'Modelo.php';
class VentaModelo extends Modelo{

    public function get($id=''){
        if($id==''){
            $query="SELECT * from  venta";
            return $this->getQuery($query);
        }
        else{
            $query="SELECT * FROM venta WHERE id_venta=:id_venta";
            return $this->getQuery($query,['id_empresa'=>$id]);
        }
        
    }

    public function insertEmpresa($cupon=array()){
        $query="INSERT INTO empresa VALUES (:id_empresa,:nombre_empresa,:comision_empresa,:estado_empresa,:fechacreacion_empresa,:rubro_empresa)";
         echo $this->setQuery($query,$cupon);
        

    }

    public function updateEmpresa($cupon=array()){
        $query="UPDATE empresa SET id_empresa=:id_empresa, nombre_empresa=:nombre_empresa, comision_empresa=:comision_empresa,estado_empresa=:estado_empresa,fechacreacion_empresa=:fechacreacion_empresa, rubro_empresa=:rubro_empresa";
        return $this->setQuery($query,$cupon);

    }

    public function removeEmpresa($id){
        $query="DELETE FROM empresa WHERE id_empresa=:id_empresa";
        return $this->setQuery($query,['id_empresa'=>$id]);
    }

}