<?php
    $action = (isset($_REQUEST['action']) && $_REQUEST['action'] !=NULL)? $_REQUEST['action']:'';
    switch($action){
        case 'updateUsuario':
            UpdateUsuario();
            break;
        default:
            echo "error usuario";
            break;
    }
?>