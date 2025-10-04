<?php

$instruments = ["Piano", "Guitarra", "Flauta", "Baix", "Bateria", "Cello"];
echo "Hi ha un total de " . count($instruments) . " instruments.";
//var_dump($instruments);

unset($instruments[3]);
$instruments = array_values($instruments);
echo "\nAra tenim " . count($instruments) . " instruments i son els següents:\n";
//var_dump($instruments)

foreach($instruments as $instrument){
    echo $instrument . "\n";
}

?>