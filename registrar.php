<?php
if (
    empty($_POST["oculto"]) || 
    empty($_POST["nombre"]) || 
    empty($_POST["correo"]) || 
    empty($_POST["usuario"]) || 
    empty($_POST["telefono"]) || 
    empty($_POST["domicilio"]) || 
    empty($_POST["cp"]) || 
    empty($_POST["ciudad"])
) {
    header('Location: index.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$telefono = $_POST["telefono"];
$domicilio = $_POST["domicilio"];
$cp = $_POST["cp"];
$ciudad = $_POST["ciudad"];

$sentencia = $bd->prepare("INSERT INTO proveedor(nombre, correo, usuario, telefono, domicilio, cp, ciudad) VALUES (?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$nombre, $correo, $usuario, $telefono, $domicilio, $cp, $ciudad]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=registrado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
?>
