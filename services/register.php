<?php

require_once './conectar.php';

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$password2 = $_REQUEST['password2'];

$sql = "SELECT email, password, rol FROM users";
$statement = $db->prepare($sql);
$statement->execute();

$logins = array();

while ($fila = $statement->fetch()) {
    // $logins[$fila['email']] = $fila['password']; 
    $logins[$fila['email']] = array($fila['password'], $fila['rol']);
}

if($password != $password2) {
    $errorPassword = "Las contraseñas no coinciden";
	header("Location: ../signup.php?errorPassword=$errorPassword") or die("Error al redirigir a formulario con error $errorPassword");;
}

if(isset($logins[$email])) {
    $errorUserExists = "El email ya está registrado";
	header("Location: ../signup.php?errorUserExists=$errorUserExists") or die("Error al redirigir a formulario con error $errorUserExists");;
}

$sql_insert = "INSERT INTO `users` (email, password, rol) " . "
		      VALUES (?, ?, ?)";
try {
	$sentencia = $db->prepare($sql_insert);
	$sentencia->execute(array($email, $password, "user"));
}catch(PDOException $error) {
	die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
}
	
// redirige a listado de deptos
header("Location: ../signin.php") or die("Error al redirigir a listado");;

?>
