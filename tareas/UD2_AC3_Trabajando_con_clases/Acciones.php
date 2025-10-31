<?php

interface Acciones {

    public function iniciar():void;
    public function detener():void;
    public function actualizar(array $a):array;

}
