<?php
require_once 'Modelo.php';
class UsuarioModelo extends Modelo{

    public function get($id=''){
        if($id==''){
            $query="SELECT * from  usuario";
            return $this->getQuery($query);
        }
        else{
            $query="SELECT * FROM usuario WHERE id_cupon=:id_cupon";
            return $this->getQuery($query,['id_cupon'=>$id]);
        }
        
    }

    public function insertUsuarios($cupon=array()){
        $query="INSERT INTO `usuario` (`id_usuario`, `correo_usuario`,  `contrasenia_usuario`, `estado_usuario`, `fechacreacion_usuario`, `id_rol`) VALUES (:id_usuario,:correo_usuario, SHA2(:contraseña_usuario,256),1,:fechacreacion_usuario,'ROL01')";
         echo $this->setQuery($query,$cupon);
    }

    public function updateUsuario($cupon=array()){
        $query="UPDATE usuario SET correo_usuario=:correo_usuario, contrasenia_usuario=:SHA2(:contrasenia_usuario,256) WHERE id_usuario=:id_usuario";
        return $this->setQuery($query,$cupon);

    }

    public function removeUsurio($id){
        $query="DELETE FROM cupon WHERE id_usuario=:id_usuario";
        return $this->setQuery($query,['id_usuario'=>$id]);
    }

    public function validateUsuario($correo_usuario,$contraseña_usuario){
        $query="SELECT U.id_usuario,U.id_rol, A.nombre FROM usuario as U
        INNER JOIN cliente as A on U.id_usuario=A.id_usuario
        WHERE U.correo_usuario=:correo_usuario AND U.contrasenia_usuario=SHA2(:contraseña_usuario,256)";
        return $this->getQuery($query,['correo_usuario'=>$correo_usuario, 'contraseña_usuario'=>$contraseña_usuario]);
    }

    public function lastUsuario(){
        $query="SELECT MAX(id_usuario) FROM usuario";
        return $this->getQuery($query);
    }
}