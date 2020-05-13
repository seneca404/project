<?php

include 'conexion.php';
if (!$conn){
	die("No se pudo conectar con la base de datos") . mysqli_connect_error();
}
else{
	$sql = "INSERT INTO guitarras (nombre, precio, descripcion, stock) VALUES ('JB24 Jason Becker', '1750', 'Huele bien', '10')";
}

if(!mysqli_query($conn, $sql){
	echo "Error" . $sql . "<br>" . mysqli_error($conn);
}
else {
	echo "OK" . "<br>";
}

mysqli_cose($conn);

?>