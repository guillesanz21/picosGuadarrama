<?php

require_once './conectar.php';
require_once './funciones_img.php';
require_once './funciones_gpx.php';

$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];
$zona = $_REQUEST['zona'];
$contenido = $_POST['content'];

$validado = (!empty($nombre) && !empty($descripcion) && !empty($contenido));
if (!$validado) {
	$error = "Los campos acrónimo $acronimo, nombre $nombre y descripción $descripcion son obligatorios";
	header("Location: ../nuevoPost.php?error=$error") or die("Error al redirigir a formulario con error $error");;  
}

$d = "../assets/images/rutas/" . str_replace(' ', '_', $nombre) . "/";

$f1 = 'foto-portada';
$f2 = 'gpx';

$error_fichero1 = error_procesa_fichero($f1, $d);
$error_fichero2 = error_procesa_fichero_gpx($f2, $d);


if ($error_fichero1 != false) {
	header("Location: ../nuevoPost.php?error=$error_fichero1") 
	or  die("Error al redirigir a formulario con error $error_fichero1");
}

if ($error_fichero2 != false) {
	header("Location: ../nuevoPost.php?error=$error_fichero2") 
	or  die("Error al redirigir a formulario con error $error_fichero2");
}

$sql_insert = "INSERT INTO `rutas` (nombre, descripcion, portada, gpx, zona, contenido) " . "
		      VALUES (?, ?, ?, ?, ?, ?)";
try {
	$sentencia = $db->prepare($sql_insert);
	$sentencia->execute(array($nombre, $descripcion, str_replace(' ', '_', $_FILES[$f1]['name']), str_replace(' ', '_', $_FILES[$f2]['name']), $zona, $contenido));
}catch(PDOException $error) {
	die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
}
	
// redirige a listado de deptos
header("Location: ../rutas.php") or die("Error al redirigir a listado");;

?>
