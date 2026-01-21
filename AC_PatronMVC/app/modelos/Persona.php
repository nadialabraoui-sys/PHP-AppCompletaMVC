<?php
 class Persona {

     private $nombre;
     private $apellidos;
     private $dni;
     private $id;

     public function __construct($nombre,$apellidos,$dni){
         $this->nombre = $nombre;
         $this->apellidos = $apellidos;
         $this->dni = $dni;
         $this->id = 0;
     }

     public function index(){


     }

     public function obtenerPersona($id){
         $this->bd->query("SELECT * FROM persona WHERE id=:id");
         $this->bd->bind(':id', $id, PDO::PARAM_INT);
     }

 }