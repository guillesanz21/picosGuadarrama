<!doctype html>
<html lang="en">
<head>
    <title>Rutas por la Sierra de Guadarrama</title>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/blog/blog.css" rel="stylesheet">

    <?php include "template/head.php"; ?>

    <!-- Mis estilos -->
    <link rel="stylesheet" type="text/css" href="assets/styles/rutas.css">
</head>
<body>

<header>
    <?php include "template/header.php"; ?>
</header>

<main>
    <section class="rutas-portada">
        <div class="container">
            <h1 class="display-2 text-center">Rutas por la Sierra de Guadarrama</h1>
            <p class="lead text-center d-none d-sm-flex">
                Publica aquí tus rutas favoritas y comenta tus sensaciones y vivencias. ¡También puedes ver qué rutas
                han hecho los demás!
            </p>
        </div>
    </section>

    <div class="container">
        <section class="filtros row mb-5">
            <h3 class="col-12 mb-4 mt-2">Búsqueda avanzada</h3>
            <div class="search-post col-12 mb-3 ">
                <input class="form-control rounded" type="text" name="search" aria-label="Buscar"
                       placeholder="Buscar por título...">
                <svg class="bi bi-search" id="search-addon" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                     viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </div>
            <div class="col-12 col-md-6 seleccion-zona row">
                <label for="zona" class="col-form-label col-lg-2"><h5>Zona</h5></label>
                <div class="col-lg-10">
                    <select id="zona" class="form-select" aria-label="Selección de la zona">
                        <option selected></option>
                        <option value="1">La Pedriza</option>
                        <option value="2">Sierra de Malagón</option>
                        <option value="3">Cotos</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-6 ordenar-posts row">
                <label for="ordenar" class="col-form-label col-lg-2"><h5>Ordenar</h5></label>
                <div class="col-lg-10">
                    <select id="ordenar" class="form-select" aria-label="Tipo de ordenación">
                        <option selected>Más nuevo a más antiguo</option>
                        <option value="1">Más antiguo a más nuevo</option>
                        <option value="2">Popularidad</option>
                        <option value="3">Más comentado</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="add">
            <a href="nuevoPost.php" class="btn add_btn mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </a>
            <p class="lead">Nueva ruta</p>
        </section>

        <section class="rutas row mb-2"></section>

        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

    </div>
</main>

<!-- FOOTER -->
<footer>
    <?php include "template/footer.php"; ?>
</footer>

<?php include "template/scripts.php"; ?>

<script src="assets/js/listar_rutas.js"></script>

</body>
</html>
