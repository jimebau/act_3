<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $direccion = $_POST['direccion'];
    $numemp = $_POST['numemp'];
    $numdepa = $_POST['numdepa'];
    $teldesuc = $_POST['teldesuc'];
    $idemp = $_POST['idemp'];
    $numger = $_POST['numger'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE sucursales SET direccion = '$direccion',numemp = '$numemp',numdepa = '$numdepa',teldesuc = '$teldesuc',idemp = '$idemp',numger = '$numger' WHERE idsucursales = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/sucursales/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
