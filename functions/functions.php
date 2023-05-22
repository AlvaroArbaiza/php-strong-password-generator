<?php

// funzione per la generazione di caratteri casuali compresi numeri, lettere minuscole, maiuscole e caratteri speciali
function getRandomString($n){

    include __DIR__ . '/../variables/variables.php';
    
    // creazione ciclo for per generare la quantita di caratteri da creare
    for ($i = 0; $i < $n; $i++) {

        $indice = $i;

        // quando l'indice supera la lunghezza dell'array $characters genero un numero random indice casuale che mi darà dei numeri casuali di volta in volta in base a dove l'indice verrà posizionato ad ogni giro del ciclo
        if ( $indice > 3 ) {

            $indice = rand( 0, sizeof($characters) );
            $indexRand = rand( 0, strlen($characters[$indice]));            
            $randomString .= $characters[$indice][$indexRand];

        } else {

            $indexRand = rand( 0, strlen($characters[$indice]) - 1 );
            $randomString .= $characters[$indice][$indexRand];
        }
    }

    return $randomString;
}