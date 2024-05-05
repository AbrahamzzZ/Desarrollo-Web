<?php
require_once 'conexion.php'; // Asegúrate de que la ruta al archivo Conexion.php sea correcta

$conexion = new Conexion();
$conexionBD = $conexion->ConexionBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    $conexion->insertarComentario($conexionBD, $nombre, $comentario);
}
?>