<?php

require_once './conectar.php';
require_once './funciones_img.php';

$acronimo = $_REQUEST['acronimo'];
$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];
$contenido = $_POST['content'];

$validado = (!empty($acronimo) && !empty($nombre) && !empty($descripcion) && !empty($contenido));
if (!$validado) {
	$error = "Los campos acrónimo $acronimo, nombre $nombre y descripción $descripcion son obligatorios";
	header("Location: ../nuevaZona.php?error=$error") or die("Error al redirigir a formulario con error $error");;  
}

$f = 'foto-portada';
$d = "../assets/images/sierra/" . $acronimo . "/";

$error_fichero = error_procesa_fichero($f, $d);


if ($error_fichero != false) {
	header("Location: ../nuevaZona.php?error=$error_fichero") 
	or  die("Error al redirigir a formulario con error $error_fichero");
}

$sql_insert = "INSERT INTO `zonas` (acronimo, nombre, descripcion, portada, contenido) " . "
		      VALUES (?, ?, ?, ?, ?)";
try {
	$sentencia = $db->prepare($sql_insert);
	$sentencia->execute(array($acronimo, $nombre, $descripcion, str_replace(' ', '_', $_FILES[$f]['name']), $contenido));
}catch(PDOException $error) {
	die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
}
	
// redirige a listado de deptos
header("Location: ../sierra.php") or die("Error al redirigir a listado");;

?>
