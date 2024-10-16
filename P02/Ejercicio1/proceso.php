<?php
$totalGastado = $_GET['totalGastado'];
if ($totalGastado > 300) {
echo "Bienvenido! Has desbloqueado el acceso VIP";
} else if ($totalGastado <= 300) {
echo "Lo sentimos, no calificas para acceso VIP";
}
?>