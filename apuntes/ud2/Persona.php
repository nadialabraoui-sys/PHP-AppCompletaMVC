<?php
class Persona {
    private $DNI;
    private $nombre;
    private $apellido;
    function __construct($DNI, $nombre, $apellido) {
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    function getDNI() {
        return $this->DNI;
    }
    function getNombre() {
        return $this->nombre;
    }
    function getApellido() {
        return $this->apellido;
    }
    function setDNI($DNI) {
        $this->DNI = $DNI;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function __toString(){
       return "Persona: " . $this->nombre . " " . $this->apellido;
    }

}

$per = new Persona("1234556y", "juan", "juanito");

echo $per->__toString() . " " . $per->getDNI() . "<br>";

$per->setApellido("el golondrina");

echo $per->__toString() . " " . $per->getDNI();



