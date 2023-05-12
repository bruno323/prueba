<?php
    require("core/initial.php");
    session_start();
    require_once('components/links.php');
    // if(!isset($_SESSION['rol'])){
        require_once('auth/login.php');
    // }else{
    //     if(!isset($_GET["view"])){
    //         // header("Location:Home");
    //         echo "error";
    //     }
    //     else{
    //         $modules= array("Home");
    //         $url= $_SERVER['REQUEST_URI'];
    //         $searchModule = explode("/",$url)[2];
    //         if(in_array($searchModule,$modules)){
    //             require_once 'modules/home.php';
    //         }else{
    //             require_once 'Screens/NotFound.php';
    //         }

    //     }
    // }
    require_once('components/scipt.php');
?>