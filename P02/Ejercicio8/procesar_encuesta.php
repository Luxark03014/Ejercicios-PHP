<?php

$opinion = $_GET['opinion'];

$respuestas = [
    "option1" => "Excelente",
    "option2" => "Bueno",
    "option3" => "Regular",
    "option4" => "Ninguna de las anteriores"
];


foreach ($respuestas as $key => $value) {
    if ($key == $opinion) {
        if ($key == "option4") {
            echo "Gracias por tu tiempo, pero no has seleccionado ninguna de las opciones.";
            break; 
        } else {
            echo "Has seleccionado: " . $value;
        }
    }
}
?>
