<?php
$host = "localhost";
$usuario = "oficia19_1";
$contrasenia = "Home@098929";
$base_de_datos = "oficia19_1";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;