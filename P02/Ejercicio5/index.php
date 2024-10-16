<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Galería de Viajes</title>
</head>

<body>
    <h1>Mi Galería de Viajes</h1>
    <?php
    $altTexts = ["Alonso Padre", "Alonso Sol", "Alonso Frente", "Alonso Camiseta", 
    "Alonso el Plan", "Alonso TikTok", "Alonso Ferrari", "Alonso Cuello", "Alonso Dios",
     "Alonso Renault"];
    for ($i = 1; $i <= 10; $i++) {
        echo "<img src='imagenes/" . $i . ".jpg' alt='" . $altTexts[$i - 1] . "'><br>";
    }
    ?>
</body>

</html>