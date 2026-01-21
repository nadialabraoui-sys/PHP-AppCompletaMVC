<?php

class Categoria extends Controlador{

    public function __construct(){
            $this->categoriaModelo = $this->modelo('Categoria');
            //echo 'Controlador páginas cargado'.'<br>';
        }

        public function index(){

            $articulos = $this->articuloModelo->obtenerCategorias();
            $datos = [

            ];

        $this->vista('paginas/ejemplo-inicio', $datos);
    }
    public function articulo(){
        $this->vista('paginas/articulo');
    }

    public function actualizar($num_registro){
        echo $num_registro;
    }


}