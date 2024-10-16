<?php

$calificacion = $_GET['calificacion'];

if ($calificacion >= 90) {
echo "Has conseguido la Medalla de Oro.";
} elseif ($calificacion >= 75) {
echo "Has conseguido la Medalla de Plata.";
} elseif ($calificacion >= 60) {
    echo "Has conseguido la Medalla de Bronce.";
}elseif ($calificacion < 60) {
echo "No has conseguido ninguna medalla :'( .";
}
?>