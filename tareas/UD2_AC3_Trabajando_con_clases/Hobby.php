<?php

abstract class Hobby {

    protected $nombre;
    protected $aniosPractica;
    protected $diversion;
    protected $habilidad;

    protected const TIPO_HOBBY = "";

        protected function __construct($nombre,$anios,$habilidad){
        $this->nombre = $nombre;
        $this->aniosPractica = $anios;
        $this->habilidad = $habilidad;
        $this->diversion = 5;
    }

    abstract function getTipoHobby(): string; //obliga a definir la constante TIPO_HOBBY
    function setNombre($nombre): void{
        $this->nombre = $nombre;
    }

    function getNombre(): string{
        return $this->nombre;
    }

    function setAnios($anios): void{
        $this->aniosPractica = $anios;
    }

    function getAnios(): string{
        return $this->aniosPractica;
    }

    function setHabilidad($habilidad): void{
        $this->habilidad = $habilidad;
    }

    function getHabilidad(): string{
        return $this->habilidad;
    }

    function setDiversion($diversion): void{
        $this->diversion = $diversion;
    }

    function getDiversion(): string{
        return $this->diversion;
    }
    abstract function __toString():string;
}