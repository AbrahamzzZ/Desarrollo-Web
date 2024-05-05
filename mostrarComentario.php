<?php
require_once 'conexion.php';
$conexion = new Conexion();
$conexionBD = $conexion->ConexionBD();

try {
    $stmt = $conexionBD->prepare("SELECT NOMBRE_PERSONA, COMENTARIO, FECHA_REGISTRO FROM Comentarios ORDER BY FECHA_REGISTRO DESC");
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='comentario'>";
        echo "<p><strong>". htmlspecialchars($row['NOMBRE_PERSONA']). ": </p>";
        echo "</strong>". htmlspecialchars($row['COMENTARIO']). "</p>";
        echo "<p>Fecha: ". htmlspecialchars($row['FECHA_REGISTRO']). "</p>";
        echo "</div>";
    }
} catch (PDOException $e) {
    echo "Error al mostrar los comentarios: ". $e->getMessage();
}
?>