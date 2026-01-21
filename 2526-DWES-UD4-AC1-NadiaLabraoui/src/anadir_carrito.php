<?php
session_start();
if(!isset($_SESSION['carrito'])) $_SESSION['carrito'] = [];
if(isset($_POST['enviado']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $productos = $_POST['productos'];

    foreach ($productos as $producto => $cantidad){
        if(isset($_SESSION['carrito'][$producto])) {
            $_SESSION['carrito'][$producto] += $cantidad;
        }else{
            $_SESSION['carrito'][$producto] = $cantidad;
        }

    }
    header("Location: ../public/carrito.php");
}else{
    header("Location: ../public/productos.php");
}

