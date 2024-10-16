<?php

$opinion = $_GET['opinion'];

$respuestas = [
"opcion1" => "Me flipó",
"opcion2" => "Estuvo guay",
"opcion3" => "Sin más",
"opcion4" => "Fué horrible"
];

foreach ($respuestas as $clave => $valor) {
if ($clave == $opinion) {
echo "Has seleccionado: " . $valor;
}
}
?>