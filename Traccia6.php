<?php
// TRACCIA 6
// Genera in una variabile un array di lunghezza 4 con al suo interno array da 5 valori interi randomici compresi tra 1 e 100
// Fare il var_dump dell’array e verificare che sia stato popolato correttamente

$random_array = [];

for ($i = 0; $i < 4; $i++) {
    $random_array[$i] = [];
    for ($j = 0; $j < 5; $j++) {
        $random_array[$i][$j] = rand(1, 100);
    }
}

var_dump($random_array);
