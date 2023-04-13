<?php
require_once 'Modelo.php';
class VentaModelo extends Modelo{

    public function get($id=''){
        if($id==''){
            $query="SELECT * from  ventas";
            return $this->getQuery($query);
        }
        else{
            $query="SELECT * FROM ventas INNER JOIN
            cupon on ventas.id_cupon=cupon.id_cupon
            WHERE ventas.id_cliente=:id_cliente";
            return $this->getQuery($query,['id_cliente'=>$id]);
        }
        
    }

    public function insertVenta($cupon=array()){
        $query="INSERT INTO ventas(id_cupon,id_cliente,cantidad,fecha_compra_ventas,estado_pago_ventas,estado_canje_ventas)
        VAlUES (:id_cupon,:id_cliente,:cantidad,now(),1,0)";
         return $this->setQuery($query,$cupon);
    
    }

}