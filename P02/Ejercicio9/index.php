<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Próximos Eventos</title>
</head>
<body>
<h1>Próximos Eventos</h1>
<?php
$eventos = [
    ["nombre" => "BravasFest", "fecha" => "2021-10-08"],
    ["nombre" => "Festival B", "fecha" => "2024-11-09"],
    ["nombre" => "Riverland", "fecha" => "2024-12-15"]
];


$hoy = date("Y-m-d");

foreach ($eventos as $evento) {
    
    if ($evento['fecha'] < $hoy) {
        continue; 
    }
    
    echo "Nombre del evento: " . $evento['nombre'] . "<br>";
    echo "Fecha del evento: " . $evento['fecha'] . "<br><br>";
}
?>
</body>
</html>
