<?php

function is_valido_gpx($fichero) {
	$extValidas = array("gpx", "kml", "kmz", "gbd", "loc", "trk", "plt", "tcx");
	$temp = explode(".", $_FILES[$fichero]["name"]);
	$extension = end($temp);

	return (in_array($extension, $extValidas));
}

function error_procesa_fichero_gpx($f, $d) {
	$file_name = $_FILES[$f]['name'];
	if (find_spaces($_FILES[$f]['name']) != false) {
		$file_name = str_replace(' ', '_', $_FILES[$f]['name']);
	}
	if (!is_valido_gpx($f)) {
		return "Fichero inválido";
	} elseif  ($_FILES[$f]["error"] > 0) {
		return "Error: ". $_FILES[$f]['error'];
	} else {
		$fichero_movido = $d . $file_name;
		if (!existe_directorio($d)) {
			mkdir($d, 0777, true);
			mueve_fichero($_FILES[$f]['tmp_name'], $fichero_movido);
			// return "Error: no existe el directorio destino $d";
			// mkdir $d;
		}elseif (file_exists($fichero_movido)) {
			return "Ya existe el fichero " . $fichero_movido;
		} else {
			mueve_fichero($_FILES[$f]['tmp_name'], $fichero_movido);
			return false;
		}	
	}
}


?>