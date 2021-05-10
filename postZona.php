<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmación de nueva zona</title>
</head>
<body>
    <?php
        function is_valido($fichero) {
            $extValidas = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES[$fichero]["name"]);
            $extension = end($temp);

            echo "<p>Extensión válida " . in_array($extension, $extValidas) . "</p>";
            return in_array($extension, $extValidas);
        }

        function muestraFichero($fichero) {
            echo "<p>Subido: " . $_FILES[$fichero]['name'] . "</p>";
            echo "<p>Tipo: " . $_FILES[$fichero]['type'] . "</p>";
            echo "<p>Tamaño: " . $_FILES[$fichero]['size'] . "</p>";
            echo "<p>Fichero temporal: " . $_FILES[$fichero]['tmp_name'] . "</p>";
        }

        function mueveFichero($origen, $destino) {
            move_uploaded_file($origen, $destino);
            echo "Almacenado en " . $destino;
        }

        function existe_directorio($destino) {
            return file_exists($destino) && is_dir("$destino");
        }

        echo "<div>";
        echo "<h1>Nueva zona</h1>";
        echo "<h2>Resultado Subir Fichero</h2>";

        $f = 'foto-portada';
        $d = "tmp/upload/";
        if(!is_valido($f)) {
            echo "<p>Fichero inválido</p>";
        } elseif ($_FILES[$f]["error"] > 0) {
            echo "<p>Error: " . $_FILES[$f]['error'] . "</p>";
        } else {
            muestraFichero($f);
            $fichero_movido = $d . $_FILES[$f]['name'];
            if (!existe_directorio($d)) {
                echo "<p>Error: no existe el directorio destino</p>";
            } elseif (file_exists($fichero_movido)) {
                echo "<p>" . $fichero_movido . " ya existe</p>";
            } else {
                mueveFichero($_FILES[$f]['tmp_name'], $fichero_movido);
            }
        }
        echo "</div>";

    echo "<h2>Resultado</h2>";
    echo "<h3>".$_REQUEST['nombre']."</h3>";
    echo "<p class='muted'>".$_REQUEST['descripcion']."</p>";
    echo "<img height='500px' width='500px' src=".$fichero_movido.">";
    if(!empty($_POST['content']) && $_POST['content']) {
        echo $_POST['content'];
    }
    ?>
</body>
</html>