<?php
require_once './conectar.php';

$sql = "SELECT id, acronimo, nombre, descripcion, portada, contenido FROM zonas LIMIT 10";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
	$filas[] = array(
			"id" => $fila['id'],
			"acronimo" => $fila['acronimo'],
			"nombre" => $fila['nombre'],
			"descripcion" => $fila['descripcion'],
			"portada" => $fila['portada'],
			"contenido" => $fila['contenido']);
}

$json = json_encode($filas); 
$callback = $_GET['callback'];
echo $callback.'('. $json . ')';
?>

