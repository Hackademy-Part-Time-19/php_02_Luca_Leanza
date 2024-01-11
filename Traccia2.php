<?php
// TRACCIA 2
//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$array_numeri = [1,2,3,4,5,6,7,8,9,10];

$somma = 0;
$numeri_pari = 0;


foreach ($array_numeri as $elemento){
    if ($elemento % 2 == 0){
        $somma += $elemento;
        $numeri_pari++;
    }

}

$media = $somma / $numeri_pari;

// echo $somma . "\n";
// echo $numeri_pari . "\n";

echo "Sono presenti nell'array" . " " . $numeri_pari . " " . "numeri pari" . ". \n" . "La media dei numeri pari è" . " " . $media . ".";