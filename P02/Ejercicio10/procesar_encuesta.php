<?php
$conference = $_GET['conference'];

$conferences = [
    "conf1" => "MiduFest",
    "conf2" => "Hackaton",
    "none" => "Ninguna de las anteriores"
];


foreach ($conferences as $key => $value) {
    if ($key == "none" && $conference == "none") {
        echo "Gracias por tu tiempo, pero no has seleccionado ninguna conferencia.";
        break; 
    } elseif ($key == $conference) {
        echo "Has evaluado: " . $value;
        break; 
    }
}
?>
