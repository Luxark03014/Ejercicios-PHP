<?php
$email = $_GET['email'];
do {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "Dirección de correo no válida. Inténtalo de nuevo.<br>";

} else {
echo "Correo electrónico válido: " . $email;
}
} while (!filter_var($email, FILTER_VALIDATE_EMAIL)); ?>