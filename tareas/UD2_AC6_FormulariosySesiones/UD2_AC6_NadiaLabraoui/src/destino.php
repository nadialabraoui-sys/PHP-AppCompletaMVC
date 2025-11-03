<?php

$passwd = "password";
$user = "user";

if((isset($_POST["enviado"])) && ($_SERVER["REQUEST_METHOD"] === "POST")) {
    if($_POST["passwd"] === $passwd && $_POST["user"] === $user){
        header("Location: calculos.php");
    }else{
        header("Location: error.php");
    }

}
