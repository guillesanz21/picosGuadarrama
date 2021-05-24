<?php 
require_once("./services/restringido.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nuevo post</title>

      <?php include "template/head.php"; ?>

    <link rel="stylesheet" type="text/css" href="assets/styles/editor.css">
  </head>
  <body>
    <header>
        <?php include "template/header.php"; ?>
      </header>

      <main class="newPost container">
          <section class="text-center create-header">
              <h1 class="display-3">Crear una nueva ruta:</h1>
              <p class="lead text-muted">Rellene los siguientes campos para poder crear una ruta nueva</p>
          </section>

          <form class="create-body" action="services/postRuta.php" method="POST" enctype="multipart/form-data">
              <article class="addon-fields row mt-5">
                <div class="col-12 mb-3">
                    <label for="nombre" class="form-label"><h5>Nombre de la ruta (*)</h5></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Máximo 60 caracteres" maxlength="60" required>
                </div>
                <!-- New row -->
                <div class="col-12 mb-3">
                    <label for="descripcion" class="form-label"><h5>Breve descripción de la ruta (*)</h5></label>
                    <textarea rows="5" cols="500" class="form-control" id="descripcion" name="descripcion" placeholder="Máximo 300 caracteres" maxlength="300" required></textarea>
                </div>
                <!-- New row -->
                <div class="col-12 col-md-4 mb-3">
                    <div class="form-group">
                        <label for="foto-portada" class="col-form-label"><h5>Elegir imagen para la portada (*)</h5></label>
                        <input class="form-control" type="file" id="foto-portada" name="foto-portada" required>
                      </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="zona" class="col-form-label"><h5>Zona</h5></label>
                    <select id="zona" class="form-select" name="zona" aria-label="Selección de la zona">
                        <option selected></option>
                    </select>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="form-group">
                        <label for="gpx" class="col-form-label"><h5>Elegir archivo GPX</h5></label>
                        <input class="form-control" type="file" id="gpx" name="gpx">
                      </div>
                </div>
              </article>

              <article class="ruta-body">
                  <h4>La ruta (*)</h4>
                  <textarea id="tinyeditor" name="content"></textarea>
              </article>
              <article class="submit">
                <input type="submit" value="Crear ruta" class="btn btn-primary" />
              </article>
          </form>
      </main>


    <?php include "template/scripts.php"; ?>

    <!-- Tiny MCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Mis ficheros Javascript -->
    <script src="assets/js/editor.js"></script>
    <script src="assets/js/newPost.js"></script>

    <script>
      var url = window.location.pathname;
      var dir = url.substring(0, url.lastIndexOf("/")); // url del servidor

      $.getJSON(dir + "/services/sierrajson.php?callback=?", (data) => {
      //$("#zona").html("");
      $.each(data, (i, item) => {
        $("#zona").append(`
          <option value="${item.acronimo}">${item.nombre}</option>
        `);
      });
    });
  </script>
  </body>
</html>
