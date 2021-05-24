<!doctype html>
<html lang="en">
<head>
    <title>La Sierra de Guadarrama</title>

    <?php include "template/head.php"; ?>

    <!-- Mis estilos -->
    <link rel="stylesheet" type="text/css" href="assets/styles/sierra.css">
</head>
<body>

<header>
    <?php include "template/header.php"; ?>
</header>

<main>

    <section class="sierra-portada">
        <div class="container">
            <h1 class="display-2 text-center">La Sierra de Guadarrama</h1>
            <p class="lead text-center d-none d-sm-flex">
                Descubre todas las zonas de la Sierra de Guadarrama en esta sección, ¡desde las zonas más conocidas
                hasta
                las zonas más recónditas!
                <br>
                La Sierra de Guadarrama es un espacio protegido con una gran variedad de paisajes, donde trataremos de
                recorrerlos todos y enseñarnos
                nuestras vivencias y sensaciones.
            </p>
        </div>
    </section>


    <div class="album bg-light">
        <div class="container">

            <section class="map">
                <iframe frameborder="0" style="border:0"
                        src="https://www.ign.es/iberpix2/visor/?&x=-436879.00&y=4986383.00&level=11&srid=3857&visible=MTN;">
                </iframe>
            </section>

            <section class="add">
                <a href="nuevaZona.php" class="btn add_btn mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </a>
                <p class="lead">Nueva zona</p>
            </section>

            <section class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 zonas"></section>
        </div>
    </div>

</main>

<!-- FOOTER -->
<footer>
    <?php include "template/footer.php"; ?>
</footer>

<?php include "template/scripts.php"; ?>

<script src="assets/js/listar_zonas.js"></script>

</body>
</html>
