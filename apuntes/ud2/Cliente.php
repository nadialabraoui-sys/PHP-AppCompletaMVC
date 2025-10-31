<?php
require_once "Persona.php";
class Cliente extends Persona {

    private $saldo = 0;

    function __construct($DNI, $nombre, $apellido, $saldo) {
        parent::__construct($DNI, $nombre, $apellido);
        $this->saldo = $saldo;
    }

    function getSaldo() {}
    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function __toString(){
        return parent::__toString() . " " . $this -> saldo;
    }

}

$clien = new Cliente("222222a", "El", "Amigo", "437826");
echo "<br><br><hr><br>" . $clien->__toString() . "<br>";