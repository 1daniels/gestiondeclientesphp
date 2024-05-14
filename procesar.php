<?php
// Conectar a la base de datos MySQL
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$estatus = $_POST['estatus'];
$plan = $_POST['plan'];

// Insertar los datos en la tabla de clientes
$sql = "INSERT INTO clientes (rut, nombre, direccion, email, telefono, estatus, plan) VALUES ('$rut', '$nombre', '$direccion', '$email', '$telefono', '$estatus', '$plan')";

if (mysqli_query($conexion, $sql)) {
    echo "Cliente registrado exitosamente";
} else {
    echo "Error al registrar el cliente: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);

