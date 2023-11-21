<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("SELECT * FROM proveedor");
$proveedores = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            Lista de proveedores
        </div>
        <div class="p-4">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">Código Postal</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($proveedores as $proveedor) {
                        ?>

                        <tr>
                            <td scope="row">
                                <?php echo $proveedor->id_proveedor; ?>
                            </td>
                            <td>
                                <?php echo $proveedor->nombre; ?>
                            </td>
                            <td>
                                <?php echo $proveedor->correo; ?>
                            </td>
                            <td>
                                <?php echo $proveedor->usuario; ?>
                            </td>
                            <td>
                                <?php echo $proveedor->telefono; ?>
                            </td>
                            <td>
                                <?php echo $proveedor->domicilio; ?>
                            </td>
                            <td>
                                <?php echo $proveedor->cp; ?>
                            </td>
                            <td>
                                <?php echo $proveedor->ciudad; ?>
                            </td>
                            <td><a class="text-success"
                                    href="editar.php?id_proveedor=<?php echo $proveedor->id_proveedor; ?>"><i
                                        class="bi bi-pencil-square"></i></a></td>
                            <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger"
                                    href="eliminar.php?id_proveedor=<?php echo $proveedor->id_proveedor; ?>"><i
                                        class="bi bi-trash"></i></a></td>
                        </tr>

                        <?php
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Ingresar datos:
            </div>
            <form class="p-4" method="POST" action="registrar.php">
                <div class="mb-3">
                    <label class="form-label">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo: </label>
                    <input type="text" class="form-control" name="correo" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Usuario: </label>
                    <input type="text" class="form-control" name="usuario" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Teléfono: </label>
                    <input type="text" class="form-control" name="telefono" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Domicilio: </label>
                    <input type="text" class="form-control" name="domicilio" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Código Postal: </label>
                    <input type="text" class="form-control" name="cp" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ciudad: </label>
                    <input type="text" class="form-control" name="ciudad" required>
                </div>
                <div class="d-grid">
                    <input type="hidden" name="oculto" value="1">
                    <input type="submit" class="btn btn-primary" value="Registrar">
                </div>
            </form>

        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>