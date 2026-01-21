<?php
namespace Nadia\Src;
session_start();
require_once "../vendor/autoload.php";

unset($_SESSION["carrito"]);
unset($_SESSION["usuario"]);
session_destroy();

header("Location: ../public/index.php");