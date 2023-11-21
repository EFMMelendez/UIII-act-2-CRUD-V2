<?php
if (!isset($_GET['id_proveedor'])) {
    header('Location: index.php?mensaje=error');
    exit();
}

include 'model/conexion.php';
$id_proveedor = $_GET['id_proveedor'];

$sentencia = $bd->prepare("DELETE FROM proveedor WHERE id_proveedor = ?;");
$resultado = $sentencia->execute([$id_proveedor]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=eliminado');
} else {
    header('Location: index.php?mensaje=error');
}
?>