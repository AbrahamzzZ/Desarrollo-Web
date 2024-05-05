<?php
class Conexion{
    function ConexionBD(){
        $host = 'localhost';
        $dbname= 'PaginaWeb';
        $username = 'Abraham';
        $password= '28dejuniodel2003';
        $puerto= 1433;

        try{
            $comn = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname", $username, $password);
            //echo "Se conectó a la base de datos correctamente :)";
        }
        catch(PDOException $exp){
            echo("No se logró conectar a la base de datos $dbname, error: $exp :(");
        }
        return $comn;
    }
    function insertarComentario($conexion, $nombre, $comentario) {
        if ($conexion) {
            try {
                $query = $conexion->prepare("INSERT INTO Comentarios (NOMBRE_PERSONA, COMENTARIO) VALUES (?,?)");
                $query->execute([$nombre, $comentario]);
                //echo "Comentario guardado correctamente.";
                require_once 'SumaJava.php';
            } catch(PDOException $exp) {
                echo "Error al guardar el comentario: ". $exp->getMessage();
            }
        }
    }
}
?>