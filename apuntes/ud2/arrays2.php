<?php
	// Array asociativo de un videojuego
$videojuego = [
    "titulo" => "Elden Ring",
    "genero" => "RPG",
    "plataforma" => "PC",
    "valoracion" => 9.5
];

// Array asociativo de un jugador
$jugador = [
    "nombre" => "Alex",
    "nivel" => 35,
    "juegos" => ["Elden Ring", "God of War", "FIFA 22"],
    "tiempo_total" => 120  // en horas
];

$catalogo = [
    [
        "titulo" => "Elden Ring",
        "genero" => "RPG",
        "plataforma" => "PC",
        "valoracion" => 9.5
    ],
    [
        "titulo" => "FIFA 22",
        "genero" => "Deportes",
        "plataforma" => "PS5",
        "valoracion" => 8.0
    ],
    [
        "titulo" => "Minecraft",
        "genero" => "Aventura",
        "plataforma" => "PC",
        "valoracion" => 9.0
    ]
];

// Lista de jugadores
$jugadores = [
    [
        "nombre" => "Alex",
        "nivel" => 35,
        "juegos" => ["Elden Ring", "FIFA 22"],
        "tiempo_total" => 120 
    ],
    [
        "nombre" => "Lucía",
        "nivel" => 42,
        "juegos" => ["Minecraft", "FIFA 22"],
        "tiempo_total" => 150
    ]
];

//1. Acceder a datos de arrays asociativos

echo "El juego $videojuego[titulo] es del genero $videojuego[genero] y esta disponible en $videojuego[plataforma] con una valoración de $videojuego[valoracion]<br><br>";

//2. Recorre el array $catalogo y muestra una lista con los títulos de todos los juegos junto con su género y valoración.

foreach ($catalogo as $lista) {
    foreach ($lista as $key => $value) {
        if ($key != "plataforma") {
            echo "$key: $value <br>";
        }else{
    }
}
echo "<br>";
}

// A partir del array $jugador, cuenta cuántos juegos tiene asociados el jugador y muéstralo por pantalla.


    foreach($jugadores as $lista) {
        if($jugador["nombre"] == $lista["nombre"]) {
            $nJuegos = count($lista['juegos']);
            echo "$jugador[nombre] tiene $nJuegos juegos<br>";
        }
     }
    

