<?php
$day = $_GET['day'];

switch ($day) {
case 1:
echo "Lunes: 9am - 8pm";
break;
case 2:
echo "Martes: 9am - 8pm";
break;
case 3:
echo "Miercoles: 9am - 8pm";
break;
case 4:
echo "Jueves: 9am - 8pm";
break;
case 5:
echo "Viernes: 9am - 8pm";
break;
case 6:
echo "Sabado: 10am - 6pm";
break;
case 7:
echo "Domingo: Cerrado";
break;
default:
echo "Dia incorrecto.";
}
?>