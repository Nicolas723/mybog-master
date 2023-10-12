<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
include_once('../config/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["user_id"])) {
    $usuarioId = $_SESSION["user_id"];

    // Eliminar registros relacionados en la tabla 'registro_de_establecimiento'
    $sqlEliminarRegistro = "DELETE FROM registro_de_establecimiento WHERE Id_Usuario = ?";
    $stmtEliminarRegistro = $conexion->prepare($sqlEliminarRegistro);
    $stmtEliminarRegistro->bind_param("i", $usuarioId);
    $stmtEliminarRegistro->execute();
    $stmtEliminarRegistro->close();

    // Eliminar la cuenta de usuario en la tabla 'cuentas'
    $sqlEliminarCuenta = "DELETE FROM cuentas WHERE Id_Usuario = ?";
    $stmtEliminarCuenta = $conexion->prepare($sqlEliminarCuenta);
    $stmtEliminarCuenta->bind_param("i", $usuarioId);

    if ($stmtEliminarCuenta->execute()) {
        // Destruir la sesión del usuario
        session_destroy();

        // Mostrar un mensaje de cuenta eliminada y redirigir a index.php
        echo '<div class="alert alert-success" role="alert">
        Cuenta eliminada exitososamente. Serás redireccionado en 3 segundos.
        </div>';
        echo '<script> setTimeout(function(){ window.location.href = "../index.php"; }, 3000); </script>';
        exit();
    } else {
        echo "Error al eliminar la cuenta: " . $stmtEliminarCuenta->error;
    }

    $stmtEliminarCuenta->close();
    $conexion->close();
} else {
    echo "Error al eliminar registros relacionados: " . mysqli_error($conexion);
    exit();
}
?>