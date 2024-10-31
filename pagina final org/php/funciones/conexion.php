<?php
$mysqli = new mysqli("localhost", "root", "1023526199","comentarios");

if ($mysqli->connect_errno) {
    echo "Falló la conexión. Número del error: " . $mysqli->connect_errno . "<br>Descripción del error: " . $mysqli->connect_error;
} else {
    //echo "Se conectó exitosamente ";
}