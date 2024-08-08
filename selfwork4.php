<?php 

// ARRAY

$numeri =  [10, 20, 30 , 40 , 50 , 60, 70 , 80 , 90 , 100];


// VARIABILI 

$counter = 0;
$totale = 0;

// foreach 

foreach($numeri as $number){
    // OPERATORE MODULO PER I NUMERI PARI
    if($number %2 == 0){
        $totale += $number;
        $counter++; // -> TOTALE DEI NUMERI PARI
    }

}

echo $totale/$counter;  // -> La media è 55





?>