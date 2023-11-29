<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nomcomercial = $_POST['nomcomercial'];
    $RFC = $_POST['RFC'];
    $nombSAT = $_POST['nombSAT'];
    $tipoproducto = $_POST['tipoproducto'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE provedores SET idprovedores = '$idprovedores',nomcomercial = '$nomcomercial' ,RFC = '$RFC',nombSAT = '$nombSAT',tipoproducto = '$tipoproducto',direccion = '$direccion',telefono = '$telefono',email = '$email' WHERE idprovedores = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/provedores/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
