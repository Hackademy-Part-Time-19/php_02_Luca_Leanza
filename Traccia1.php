<?php
// TRACCIA 1
//Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, 
//per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” 
//a seconda del genere, utilizzando if…elseif…else
//Implementa nuovamente l’esercizio utilizzando uno switch

$users = [
    ['name' => 'Luca', 'surname' => 'Leanza', 'gender' => 'M'],
    ['name' => 'Giusi', 'surname' => 'Pappalardo', 'gender' => 'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

// STAMPA CON IF ELSE

foreach ($users as $elemento) {

    if ($elemento["gender"] == "M") {
        echo "Buongiorno Sig." . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
    } elseif ($elemento["gender"] == "F") {
        echo "Buongiorno Sig.ra" . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
    } else {
        echo "Buongiorno" . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
    }
}

// STAMPA CON SWITCH

foreach ($users as $elemento) {
    switch ($elemento["gender"]) {
        case 'M':
            echo "Buongiorno Sig." . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
            break;
        case   'F':
            echo "Buongiorno Sig.ra" . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
            break;
        default:
            echo "Buongiorno" . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
            break;
    }
}
