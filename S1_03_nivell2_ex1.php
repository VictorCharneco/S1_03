<?php

$llistaConvidats1 = ["Marc", "Manel", "Laura", "Josep", "Eric"];
$llistaConvidats2 = ["Laura", "Neus", "Josep", "Manel", "Jordi"];

$mateixosConvidats = array_intersect($llistaConvidats1, $llistaConvidats2);
var_dump($mateixosConvidats);

$mergeArrays = array_merge($llistaConvidats1, $llistaConvidats2);
$convidatsNoDuplicats = array_unique($mergeArrays);
var_dump($convidatsNoDuplicats);

$unicsLlista1 = array_diff($llistaConvidats1, $llistaConvidats2);
var_dump($unicsLlista1);

$unicsLlista2 = array_diff($llistaConvidats2, $llistaConvidats1);
var_dump($unicsLlista2);

?>