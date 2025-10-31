<?php
require_once 'Hobby.php';
require_once 'Acciones.php';
class Bailar extends Hobby implements Acciones{

    protected $estilo;
    protected static int $amigosConocidos = 0;
    protected const TIPO_HOBBY = "Motriz";

    function __construct($nombre,$anios,$estilo,$habilidad){
        parent::__construct($nombre,$anios,$habilidad);
        $this->estilo = $estilo;
        $this->diversion = 5;

    }
    public function __destruct() {
        echo "<br>" . __CLASS__ . " ha sido borrado<br>";
    }


    private function divertirseRand(){
        $puntosDiversion = rand(1, 2);
        if($puntosDiversion == 1){
            $this->diversion = $this->diversion + $puntosDiversion;
            echo "¡Te has divertido mucho bailando!";
        }else{
            $this->diversion = $this->diversion - $puntosDiversion;
            echo "Ese baile ha sido muy aburrido";
        }
    }

    protected function enseniarAlumno(){ //usar por si se crea una subclase sobre enseniar el hobby
        $this->habilidad = $this->habilidad + 1;
        $this->divertirseRand();
    }
    function __toString(): string{
        return __CLASS__ . ": Nombre: ". $this->getNombre() . " Estilo: ".$this->getEstilo(). " Habilidad: ".$this->getHabilidad() . " Nivel de diversión: ".$this->getDiversion(). " Años de práctica: ".$this->getAnios()." Tipo: " .$this->getTipoHobby();
    }

    public function iniciar(): void{
        echo "Iniciando bailar " . "<br>" .$this->__toString();

    }

    public function detener(): void{
        echo "Deteniendo Bailar<br>" . $this->__toString();
        $this->divertirseRand();
    }

    public function actualizar($array): array{
        $newArray = array();
        return $newArray;
    }

    public static function getAmigosConocidos(): int
    {
        return self::$amigosConocidos;
    }

    public static function setAmigosConocidos(int $num): void
    {
        self::$amigosConocidos = self::$amigosConocidos + $num;
    }

    function setEstilo($estilo): void{
        $this->estilo = $estilo;
    }

    public function getEstilo(){
        return $this->estilo;
    }

    function getTipoHobby(): string{
        return self::TIPO_HOBBY;
    }
}