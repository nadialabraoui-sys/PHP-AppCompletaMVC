<?php
namespace Nadia\Src;
session_start();
require_once "../vendor/autoload.php";

if(isset($_POST["enviado"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $correo = $_POST["email"];
    $clave = $_POST["passwd"];

    /* if(!filter_var($correo, FILTER_VALIDATE_EMAIL) || is_string($correo) && trim($correo) == ""){
        $mensaje = "El correo es incorrecto";
        header("Location: ../public/login.php?error=".$mensaje);
        exit();
    }

    if(is_string($clave) && trim($clave) == ""){
        $mensaje = "El campo contraseña no puede estar vacío";
        header("Location: ../public/login.php?error=".$mensaje);
        exit();
    } */

$usuario = new Usuario($correo, $clave);
    if($usuario->login() !== false){
        header("Location:../public/index.php");
    }else{
        $mensaje = "Datos incorrectos";
        header("Location: ../public/login.php?error=".$mensaje);
        exit;
    }

}
