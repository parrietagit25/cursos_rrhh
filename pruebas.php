<?php 

$palabra = "empanada";
$hash = password_hash($palabra, PASSWORD_BCRYPT);

// Imprimiría el hash real de "empanada" que podría variar en cada ejecución debido a la sal aleatoria.
echo $hash;