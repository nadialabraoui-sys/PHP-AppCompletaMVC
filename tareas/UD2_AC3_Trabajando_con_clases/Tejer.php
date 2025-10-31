<?php

require_once 'Hobby.php';
require_once 'Tiempo.php';
Class Tejer extends Hobby implements Tiempo {
    protected $tiempoMax;
    protected $tiempoMin;
    protected const TIPO_HOBBY = "Manualidad";
    function __construct($nombre, $anios, $habilidad, $tiempoMax, $tiempoMin){
        parent::__construct($nombre,$anios, $habilidad);
    $this->tiempoMax = $tiempoMax;
    $this->tiempoMin = $tiempoMin;
}


    function tiempoPasado()
    {
        return $this->tiempoMax - $this->tiempoMin;
    }
    public function getTiempoMin()
    {
        return $this->tiempoMin;
    }
    public function setTiempoMin($tiempoMin): void
    {
        $this->tiempoMin = $tiempoMin;
    }

    public function getTiempoMax()
    {
        return $this->tiempoMax;
    }

    public function setTiempoMax($tiempoMax): void
    {
        $this->tiempoMax = $tiempoMax;
    }
    function __toString(): string
    {
        return __CLASS__ . ": Nombre: ". $this->getNombre() . " Habilidad: ".$this->getHabilidad() . " Nivel de diversión: ".$this->getDiversion()." Años de práctica: ".$this->getAnios()." Tipo: " .$this->getTipoHobby() . " ";
    }
    function getTipoHobby(): string
    {
        return self::TIPO_HOBBY;
    }
}
