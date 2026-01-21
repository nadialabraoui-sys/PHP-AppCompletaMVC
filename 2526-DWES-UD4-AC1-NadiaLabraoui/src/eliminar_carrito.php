<?php
session_start();
if(isset($_GET['codProd'])){
    unset($_SESSION['carrito'][$_GET['codProd']]);

    header("Location: ../public/carrito.php");
}
