<?php
$jugadores = [];
$ganadores = [false];
$baraja = [];
$cartaActual = 0;

function crearBaraja() {
    /* FALTA PONER LOS ATRIBUTOS COMO PARAMETROS Y NO COMO GLOBALES   */
    $baraja = [];
    $palos = ["Pica", "Diamante", "Trebol", "Corazon"];
    $cartas = [
        "A" => 1,
        "2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
        "J" => 0.5, "Q" => 0.5, "K" => 0.5
    ];

    foreach ($palos as $palo) {
        foreach ($cartas as $nombre => $valor) {
            $baraja[] = [
                "carta" => $nombre . " de " . $palo,
                "palo" => $palo,
                "nombre" => $nombre,
                "valor" => $valor
            ];
        }
    }

    shuffle($baraja);
    return $baraja;
}

function crearJugadores() {
    global $jugadores, $baraja, $cartaActual;

    for ($j = 0; $j < 1; $j++) {
        for ($r = 0; $r < 1; $r++) {
            $jugadores[$j][$r] = $baraja[$cartaActual];
            $cartaActual++;
        }
    }
}

function siguienteRonda() {
    global $jugadores, $ganadores, $baraja, $cartaActual;

    for ($j = 0; $j < count($jugadores); $j++) {
        if ($ganadores[$j] == false) {
            $r = count($jugadores[$j]);
            $jugadores[$j][$r] = $baraja[$cartaActual];
            $cartaActual++;
        }
    }
}

function mostrarGanadores() {
    global $ganadores;

    for ($j = 0; $j < count($ganadores); $j++) {
        if ($ganadores[$j]) {
            print "Ha ganado el jugador " . ($j + 1) . "<br>";
        }
    }
}
?>

