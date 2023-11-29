<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/sucursales/index.php">sucursales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/provedores/index.php">provedores</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">REGISTRAR sucursales</h5>
                        <form action="<?php echo base_url; ?>CRUDM/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">numemp</label>
                                <input type="text" class="form-control" id="numemp" name="numemp" placeholder="numero de empleado" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">numdepa</label>
                                <input type="text" class="form-control" id="numdepa" name="numdepa" placeholder="numero de departamento" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">teldesuc</label>
                                <input type="text" class="form-control" id="teldesuc" name="teldesuc" placeholder="telefono de sucursal" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">idemp</label>
                                <input type="text" class="form-control" id="idemp" name="idemp" placeholder="id empleado" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">numger</label>
                                <input type="text" class="form-control" id="numger" name="numger" placeholder="numero gerente" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/sucursales/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>