<?php

/** Wiederholung Schleifen
 * 
 * Es gibt kopf- und fußgesteuerte Schleifen
 * 
 * Zu den kopfgesteuerten Schleifen zählen:
 * - for
 * - while
 * - foreach
 * 
 * do ... while ist eine fußgesteuerte Schleife.
 */


// Schreibe eine for-Schleife die von 0 bis 100 zählt und die aktuelle Itteration
// untereinander ausgibt.

// for ($i=0; $i < 101; $i++) { 
//     echo "Die Nummer ist: $i <br>";
// }

 // Schreibe eine while-Schleife die von 50 bis -50 zählt und die aktuelle Itteration
 // untereinander ausgibt.

//  $a = 50;
// while ($a >= (-50)) {
//     echo "Die Nummer ist: $a <br>";
//     $a--;
    
// }

 // Schreibe eine foreach-Schleife die ein assoziatives Array mit key und value untereinander ausgibt.
 // Verwende single-quotes im echo-statement.

//  $autoArrayAssoziativ = [
//     'Auto1' => 5000,
//     'Auto2' => 20000,
//     'Auto3' => 12000
    
// ];
// foreach ($autoArrayAssoziativ as $key => $value) {
//     echo "<strong>$key: </strong> $value Euro.<br>";
// }


 // Schreibe eine do...while-Schleife die von 0 bis 19 alle Zahlen untereinander ausgibt.
 // Verwende in der Bedingung nur den kleiner-als-Operator
$i = 0;
do { 
    echo "Die Nummer ist: $i <br>";
    $i++;
} 
    while ($i <= 19);


 // Push dieses File in dein GitHub-Repository