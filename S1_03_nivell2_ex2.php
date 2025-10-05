<?php

$llistaNotes =[
    "Joan" => [5, 6, 7, 8, 9],
    "Mireia" => [6, 6, 8, 9, 6],
    "Bernat" => [8, 8, 8, 9, 8],
    "Laia" => [10, 10, 10, 9, 6]
];


function mitjanaAlumnes(array $llistaNotes){
$SumaTotalNotes = 0;
$Notes = 0;

    foreach($llistaNotes as $alumne => $nota){
        $alumnes = array_sum($nota);
        $totalNotes = count($nota);
        $calculMitjana = $alumnes / $totalNotes;
        echo "La mitjana de " . $alumne . ": " . $calculMitjana . "\n";

        $SumaTotalNotes += $alumnes;
        $Notes += $totalNotes;
    }
    $mitjanaClasse = $SumaTotalNotes / $Notes;
    echo "---------\n";
    echo "La mitjana de la classe és: " . $mitjanaClasse;

}

mitjanaAlumnes($llistaNotes);

?>