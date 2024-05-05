<?php

$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_NAME'];

$conexion = mysqli_connect($host, $username, $password, $database);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}