<?php

class Categorias extends Controlador{
    private $categoriaModelo;
    public function __construct(){
            $this->categoriaModelo = $this->modelo('categoriasmodel');
            //echo 'Controlador páginas cargado'.'<br>';
        }

        public function index(){

            $articulos = $this->categoriaModelo->obtenerCategorias();
            $datos = $articulos;

        $this->vista('paginas/categorias', $datos);
    }
}