<?php
//TRACCIA 4
/*
- Creare una variabile $temperatura ed utilizzando if, stampare il testo “Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.
- Successivamente, utilizzando else, stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.
- Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi.
*/

 $temperatura = 25;

if ($temperatura < 15) {
    echo "Fa freddo";
} elseif ($temperatura >= 15 && $temperatura < 20) {
    echo "Fa fresco";
} elseif ($temperatura >= 20 && $temperatura < 25) {
    echo "Fa caldo";
} elseif ($temperatura >= 25 && $temperatura < 30) {
    echo "Fa molto caldo";
} else {
    echo "Temperatura non valida";
}

//TRACCIA 5
$temperature = [
    "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30,
    "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9,
];

foreach ($temperature as $key => $value) {
    if ($value < 15) {
        echo "A" . " " . $key . " " . "fa freddo" . " " . "con temperatura di" . " " . $value . " " . "gradi" . "\n";
    } elseif ($value >= 15 && $value < 20) {
        echo "A" . " " . $key . " " . "fa fresco" . " " . "con temperatura di" . " " . $value . " " . "gradi" . "\n";
    } elseif ($value >= 20 && $value < 25) {
        echo "A" . " " . $key . " " . "fa caldo" . " " . "con temperatura di" . " " . $value . " " . "gradi" . "\n";
    } elseif ($value >= 25 && $value < 35) {
        echo "A" . " " . $key . " " . "fa molto caldo" . " " . "con temperatura di" . " " . $value . " " . "gradi" . "\n";
    } else {
        echo "Temperatura non valida";
    }
}
