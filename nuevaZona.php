<?php 
require_once("./services/restringido.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nueva zona</title>

      <?php include "template/head.php"; ?>

    <link rel="stylesheet" type="text/css" href="assets/styles/editor.css">
  </head>
  <body>
    <header>
        <?php include "template/header.php"; ?>
      </header>

      <main class="newPost container">
          <section class="text-center create-header">
              <h1 class="display-3">Crear una nueva zona:</h1>
              <p class="lead text-muted">Rellene los siguientes campos para poder crear una zona nueva</p>
          </section>

          <form class="create-body" action="services/postZona.php" method="POST" enctype="multipart/form-data">
              <article class="addon-fields row mt-5">
                <div class="col-12 mb-3">
                    <label for="nombre" class="form-label"><h5>Zona: (*)</h5></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Máximo 60 caracteres" maxlength="60" required>
                </div>
                <!-- New row -->
                <div class="col-12 mb-3">
                    <label for="descripcion" class="form-label"><h5>Breve descripción de la zona (*)</h5></label>
                    <textarea rows="5" cols="500" class="form-control" id="descripcion" name="descripcion" placeholder="Máximo 300 caracteres" maxlength="300" required></textarea>
                </div>
                <!-- New row -->
                <div class="col-12 mb-3">
                  <div class="form-group">
                    <label for="foto-portada" class="col-form-label"><h5>Elegir imagen para la portada (*)</h5></label>
                    <input class="form-control" type="file" id="foto-portada" name="foto-portada" required>
                  </div>
                </div>
                <!-- New row -->
                <div class="col-12 mb-3">
                  <div class="form-group">
                    <label for="acronimo" class="col-form-label"><h5>Elegir un acrónimo (sin espacios ni mayúsculas ni acentos) (*)</h5></label>
                    <input class="form-control" type="text" id="acronimo" name="acronimo" placeholder="Máximo 25 caracteres" maxlength="25" required>
                  </div>
                </div>
              </article>

              <article class="ruta-body">
                  <h4>La zona (*)</h4>
                  <textarea id="tinyeditor" name="content"></textarea>
              </article>
              <article class="submit">
                <input type="submit" value="Crear zona" class="btn btn-primary" />
              </article>
          </form>
      </main>

    <?php include "template/scripts.php"; ?>

    <!-- Tiny MCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Mis ficheros Javascript -->
    <script src="assets/js/editor.js"></script>
    <script src="assets/js/newZone.js"></script>
  </body>
</html>
