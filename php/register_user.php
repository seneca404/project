<?php

$userName = $_POST['user'];
$userEmail = $_POST['email'];
$userPw = $_POST['pw'];
$pwConfirm = $_POST['pw_confirm'];

include 'conexion.php';
if(!$conn){
	die("No se pudo establecer conexión con la base de datos: ").mysqli_connect_error();
}

echo "Ingresando..." . "<br>";

$sql = "INSERT INTO ingresados (user, mail, password, password_confirm)
VALUES ('$userName', '$userEmail', '$userPw', '$pwConfirm')";
if (mysqli_query($conn, $sql)){
	echo "status OK" . "<br>";
}
else {
	echo "error" . $sql . "<br>" . mysqli_error($conn);
}


?>