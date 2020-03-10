<?php
$conexion = mysqli_connect("localhost","root","","compras");
//Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$producto = $_POST["producto"];
$numerocb = $_POST["numerocb"];
$correo = $_POST["correo"];
//Consulta para insertar
$direccion = $_POST["direccion"];
$insertar = "INSERT INTO prendas (nombre, producto, numerocb, correo) VALUES ('$nombre', '$producto', '$numerocb', '$correo')";
//Ejecutar Consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al hacer compra';
}else {
	header("location:index.html");
}
//Cerrar Conexion
mysqli_close($conexion);