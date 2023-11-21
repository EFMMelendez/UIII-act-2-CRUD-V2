<?php
print_r($_POST);

if(!isset($_POST['id_proveedor'])){
    header('Location: index.php?mensaje=error');
}

include 'model/conexion.php';

$id_proveedor = $_POST['id_proveedor'];
$nombre = $_POST['txtNombre'];
$correo = $_POST['txtCorreo'];
$usuario = $_POST['txtUsuario'];
$telefono = $_POST['txtTelefono'];
$domicilio = $_POST['txtDomicilio'];
$cp = $_POST['txtCP'];
$ciudad = $_POST['txtCiudad'];

$sentencia = $bd->prepare("UPDATE proveedor SET nombre = ?, correo = ?, usuario = ?, telefono = ?, domicilio = ?, cp = ?, ciudad = ? WHERE id_proveedor = ?;");
$resultado = $sentencia->execute([$nombre, $correo, $usuario, $telefono, $domicilio, $cp, $ciudad, $id_proveedor]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=editado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
?>
