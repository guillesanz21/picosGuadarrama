<?php
require_once './conectar.php';

$sql = "SELECT id, nombre, descripcion, portada, gpx, zona, contenido, date FROM rutas LIMIT 10";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
	$filas[] = array(
			"id" => $fila['id'],
			"nombre" => $fila['nombre'],
			"descripcion" => $fila['descripcion'],
			"portada" => $fila['portada'],
			"gpx" => $fila['gpx'],
			"zona" => $fila['zona'],
			"contenido" => $fila['contenido'],
			"date" => $fila['date']);
}

$json = json_encode($filas); 
$callback = $_GET['callback'];
echo $callback.'('. $json . ')';
?>

