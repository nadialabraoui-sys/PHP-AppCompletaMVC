<?php
//interfaces multiples
interface Enviador {
    public function Enviar(string $mensaje):void;
}
interface Registrador {
    public function registrar(string $mensaje):void;
}

class Notificador implements Enviador, Registrador {
    public function registrar(string $mensaje):void{
        echo "Registrando mensaje: $mensaje<br>";
    }
    public function enviar(string $mensaje):void{
        echo "Enviando mensaje: $mensaje<br>";
    }
}

//Interfaces con herencia