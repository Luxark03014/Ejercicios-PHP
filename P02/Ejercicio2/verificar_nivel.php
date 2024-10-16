<?php

$nivel = $_GET['nivel'];

if ($nivel >= 15) {
echo "Puedes participar
en el torneo";
} else {
echo "Lo sentimos,
no tienes el nivel suficiente para participar.";
}
?>