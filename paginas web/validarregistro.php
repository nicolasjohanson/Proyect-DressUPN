<?php
$conexion = mysqli_connect("localhost","root","","registro");
//Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
//Consulta para insertar
$insertar = "INSERT INTO sandy (nombre, apellidos, correo, usuario, clave, telefono) VALUES ('$nombre','$apellidos','$correo','$usuario','$clave','$telefono')";
//Ejecutar Consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	header("location:iniciar.html");
}
//Cerrar Conexion
mysqli_close($conexion);