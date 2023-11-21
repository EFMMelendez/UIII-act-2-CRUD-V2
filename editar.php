<?php include 'template/header.php' ?>

<?php
if(!isset($_GET['id_proveedor'])){
    header('Location: index.php?mensaje=error');
    exit();
}

include_once 'model/conexion.php';
$id_proveedor = $_GET['id_proveedor'];

$sentencia = $bd->prepare("SELECT * FROM proveedor WHERE id_proveedor = ?;");
$sentencia->execute([$id_proveedor]);
$proveedor = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required
                        value="<?php echo $proveedor->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="txtCorreo" autofocus required
                        value="<?php echo $proveedor->correo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Usuario: </label>
                        <input type="text" class="form-control" name="txtUsuario" autofocus required
                        value="<?php echo $proveedor->usuario; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono: </label>
                        <input type="text" class="form-control" name="txtTelefono" autofocus required
                        value="<?php echo $proveedor->telefono; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Domicilio: </label>
                        <input type="text" class="form-control" name="txtDomicilio" autofocus required
                        value="<?php echo $proveedor->domicilio; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Código Postal: </label>
                        <input type="text" class="form-control" name="txtCP" autofocus required
                        value="<?php echo $proveedor->cp; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ciudad: </label>
                        <input type="text" class="form-control" name="txtCiudad" autofocus required
                        value="<?php echo $proveedor->ciudad; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="hidden" name="id_proveedor" value="<?php echo $proveedor->id_proveedor; ?>">
                        <input type="submit" class="btn btn-primary" value="Guardar cambios">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>
