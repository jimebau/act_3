<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
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
                        <h5 class="card-title text-center">ACTUALIZAR provedores</h5>
                        <form action="<?php echo base_url; ?>CRUDR/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM provedores WHERE idprovedores =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['idprovedores'] ?>">
                            <div class="mb-3">
                                <label for="idprovedores" class="form-label">idprovedores</label>
                                <input type="text" class="form-control" id="idprovedores" name="idprovedores" placeholder="id de provedor" value="<?php echo $row['idprovedores'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nomcomercial" class="form-label">nomcomercial
                                </label>
                                <input type="text" class="form-control" id="nomcomercial" name="nomcomercial" placeholder="nombre comercial" value="<?php echo $row['nomcomercial'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="RFC" class="form-label">RFC</label>
                                <input type="text" class="form-control" id="RFC" name="RFC" placeholder="RFC" value="<?php echo $row['RFC'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombSAT" class="form-label">nombSAT</label>
                                <input type="text" class="form-control" id="nombSAT" name="nombSAT" placeholder="nombre SAT" value="<?php echo $row['nombSAT'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tipoproducto" class="form-label">tipoproducto</label>
                                <input type="text" class="form-control" id="tipoproducto" name="tipoproducto" placeholder="tipo de producto" value="<?php echo $row['tipoproducto'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" value="<?php echo $row['direccion'] ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="telefono" class="form-label">telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="<?php echo $row['telefono'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $row['email'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
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