<?php
    $action = (isset($_REQUEST['action']) && $_REQUEST['action'] !=NULL)? $_REQUEST['action']:'';
    switch($action){
        case "Login":
            login();
            break;
        case 'LogOut':
            logOut();
            break;
        default:
            echo 'error login';
            break;
    }

function updateEstadoUsuario(Usuario $usuario){
	require_once("../model/AdministradorUsuario.php");
	$outputManagment = new AdministrarUsuario();
	$outputManagment->updateEstado($usuario->idUsuario,$usuario->estado);
}
    
function login(){
    require_once('../model/usuario.php');
    require_once('../model/AdministradorUsuario.php');
    $outputResponse = new AdministrarUsuario();
    $correo = $_REQUEST['correo'];
    $password = $_REQUEST['password'];
    $data = $outputResponse->loginUsuario($correo);
    $usuario = new Usuario($data['idUsuario'],$data['nombre'],$data['apellido'],$data['correo'],$data['password'],$data['rol']);
    if($data){
        if($usuario->desencriptarContraseña($password)){
            session_start();
            $usuario->actualizarEstado(1);
            updateEstadoUsuario($usuario);
            almacenarSesion($usuario);
            echo json_encode(1);
        }else{
            echo json_encode("la contaseña es incorrecta");
        }
    }else{
        echo json_encode("el correo ingresado no existe");
    }
}  

function almacenarSesion(Usuario $usuario){
	$_SESSION["rol"]=$usuario->rol;
    $_SESSION["idUsuario"]=$usuario->idUsuario;
	$_SESSION["nombre"]=$usuario->nombre;
	$_SESSION["apellido"]=$usuario->apellido;
	$_SESSION["correo"]=$usuario->correo;
}

?>