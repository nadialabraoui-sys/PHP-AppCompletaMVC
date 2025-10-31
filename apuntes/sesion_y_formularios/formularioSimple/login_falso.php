<?php

if($_POST["usuario"] == "nadia" and $_POST["clave"] == "1234") {
    header("Location:bienvenido.html");
}else{
    header("Location:error.html");
}
