<?php
require_once 'AdministradorModelo.php';
class AdministrarUsuario extends AdministrarModelo{
    function loginUsuario($correo){
        $sql="SELECT * FROM usuario WHERE correo=:correo";
        $response = $this->getConexion()->prepare($sql);
        $response->bindParam(":correo",$correo);
        $response->execute();
        $result= $response->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function updateEstado($idUsuario,$estado){
        $sql="UPDATE usuario set estado=:estado where idUsuario = :idUsuario";
        $response= $this->getConexion()->prepare($sql);
        $response->bindParam(":estado",$estado);
        $response->bindParam(":idUsuario",$idUsuario);
        $response->execute();
    }
}

?>