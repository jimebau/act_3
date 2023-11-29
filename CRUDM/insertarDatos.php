<?php

include "../config/conexion.php";

$direccion = $_POST['direccion'];
$numemp = $_POST['numemp'];
$numdepa = $_POST['numdepa'];
$teldesuc = $_POST['teldesuc'];
$idemp = $_POST['idemp'];
$numger = $_POST['numger'];

$sql = "INSERT INTO sucursales(direccion, numemp, numdepa, teldesuc, idemp, numger)
    VALUES ('$direccion','$numemp','$numdepa','$teldesuc','$idemp','$numger')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/sucursales/index.php");
} else {
    echo "Datos no insertados";
}
