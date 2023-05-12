<?php

class Usuario
{
    var $idUsuario
    var $nombre;
    var $apellido;
    var $correo;
    var $password;
    var $rol;
    var $estado;


function __construct($idUsuario,$nombre,$apellido,$correo,$password,$rol){
    $this->$idUusario=$idUusario;
    $this->correo=$correo;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->password=$password;
    $this->rol=$rol;
}

public function setEstado($estado){
    return $this->estado=$estado;
}

public function actualizarEstado($estado){
    if($estado==1){
        $this->setEstado('on');
    }else{
        $this->setEstado('off');
    }
}

public function desencriptarContraseña($contraseñaIngresada){
    return password_verify($contraseñaIngresada,$this->password);
}
}
?>