<?php
require_once "Ayuda.php";
require_once "Bailar.php";
require_once "autoloader.php";

echo "B) <br>";
define('N', rand(1, 10));
$ayuda = new Ayuda();
$baile1 = new Bailar("Lucia",10, "ballet", 4);
$baile2 = new Bailar("Miguel",5, "tango", 6);
$baile3 = new Bailar("Carolo",7, "hiphop", 10);

$baile1->iniciar();
unset($baile1);
echo "<br>";
$baile2->iniciar();
unset($baile2);
echo "<br>";
$baile3->iniciar();
unset($baile3);
echo "<br><br> E) <br>";

    for($i=0; $i<N; $i++){
        $algo = new Bailar($ayuda->generarNombre(), $ayuda->generarEntero(), $ayuda->generarNombre(), $ayuda->generarNombre());
        echo "$algo";
        Bailar::setAmigosConocidos(1);
        unset($algo);
        echo "<br>";
    }
    echo "<br>";
echo "<br>J)<br>";
   echo "Amigos conocidos bailando: " .Bailar::getAmigosConocidos();

   Bailar::setAmigosConocidos(1);

echo "<br>Amigos conocidos bailando: " .Bailar::getAmigosConocidos();
echo "<br>";


echo "<br>G)";
//no se hacerlo
    $arrayGlobal = [
      "Dificultad","Monetizable"
        ];
for($i=0; $i<N; $i++) {
    $arrayAux = [];

}

echo "<br>";

echo "<br>LL)<br>";

$componerMusica = new class("componer1", 11, 9) extends Hobby implements Acciones{

    protected const TIPO_HOBBY = "Creativo";


    public function __construct($nombre, $anios, $habilidad)
    {
        parent::__construct($nombre, $anios, $habilidad);
    }

    public function iniciar(): void
    {
        echo "Iniciando componer musica <br>";
    }

    public function detener(): void
    {
        echo "Deteniendo componer musica <br>";
    }

    public function actualizar(array $a): array
    {
        $newArray = $a;
        return $newArray;
    }
    function getTipoHobby(): string
    {
       return self::TIPO_HOBBY;
    }

    function __toString(): string
    {
        return "Nombre: ". $this->getNombre() . " Habilidad: ".$this->getHabilidad() . " Nivel de diversión: ".$this->getDiversion()." Años de práctica: ".$this->getAnios(). " Tipo: " .$this->getTipoHobby() . " ";
    }

};

$componerMusica->iniciar();
echo $componerMusica;
echo "<br>";
