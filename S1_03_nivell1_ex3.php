<?php

function validacioChar(array $paraules, string $caracter){
    foreach ($paraules as $paraula){
        if (stripos($paraula, $caracter) === false){
            return false;
        }
    }
    return true;
}

$paraules = ["hola", "Php", "Html"];
echo validacioChar($paraules, "h");

?>