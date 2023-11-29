<?php

include "../config/conexion.php";

$idprovedores = $_POST['idprovedores'];
$nomcomercial = $_POST['nomcomercial'];
$RFC = $_POST['RFC'];
$nombSAT = $_POST['nombSAT'];
$tipoproducto = $_POST['tipoproducto'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "INSERT INTO provedores(idprovedores, nomcomercial, RFC, nombSAT, tipoproducto, direccion, telefono, email)
    VALUES ('$idprovedores','$nomcomercial','$RFC','$nombSAT','$tipoproducto','$direccion','$telefono','$email')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/provedores/index.php");
} else {
    echo "Datos no insertados";
}
