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

            <section class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 zonas">


                <div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/pedriza/sierra_pedriza_sm.jpeg" alt="El Yelmo">
                                <div class="card-body">
                                    <h3 class="text-center">La Pedriza</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    La Pedriza es una zona casi únicamente rocosa, preciosa por su variedad de formas de
                                    piedras y considerada un parque de atracciones
                                    para los escaladores.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/malagon/sierra_malagon_sm.jpeg" alt="El Pico del Fraile">
                                <div class="card-body">
                                    <h3 class="text-center">Sierra de Malagón</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    La Sierra de Malagón se posiciona al sur del puerto de Guadarrama y presenta una
                                    gran cantidad de
                                    vegetación. Toda esta zona contiene una gran cantidad de elementos históricos, como
                                    varios bunkers de la Guerra Civil Española
                                    o la Silla de Felipe II.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/cotos/sierra_cotos_sm.jpeg" alt="El Yelmo">
                                <div class="card-body">
                                    <h3 class="text-center">Cotos</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    La zona que contiene el pico más alto de la Sierra de Guadarrama: Peñalara. Una zona
                                    muy variada,
                                    con mucho bosque, pero también roca. Una zona que hay que visitar sí o sí.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/pedriza/sierra_pedriza_sm.jpeg" alt="El Yelmo">
                                <div class="card-body">
                                    <h3 class="text-center">La Pedriza</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    La Pedriza es una zona casi únicamente rocosa, preciosa por su variedad de formas de
                                    piedras y considerada un parque de atracciones
                                    para los escaladores.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/malagon/sierra_malagon_sm.jpeg" alt="El Pico del Fraile">
                                <div class="card-body">
                                    <h3 class="text-center">Sierra de Malagón</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    La Sierra de Malagón se posiciona al sur del puerto de Guadarrama y presenta una
                                    gran cantidad de
                                    vegetación. Toda esta zona contiene una gran cantidad de elementos históricos, como
                                    varios bunkers de la Guerra Civil Española
                                    o la Silla de Felipe II.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/cotos/sierra_cotos_sm.jpeg" alt="El Yelmo">
                                <div class="card-body">
                                    <h3 class="text-center">Cotos</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    La zona que contiene el pico más alto de la Sierra de Guadarrama: Peñalara. Una zona
                                    muy variada,
                                    con mucho bosque, pero también roca. Una zona que hay que visitar sí o sí.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/pedriza/sierra_pedriza_sm.jpeg" alt="El Yelmo">
                                <div class="card-body">
                                    <h3 class="text-center">La Pedriza</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    La Pedriza es una zona casi únicamente rocosa, preciosa por su variedad de formas de
                                    piedras y considerada un parque de atracciones
                                    para los escaladores.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/malagon/sierra_malagon_sm.jpeg" alt="El Pico del Fraile">
                                <div class="card-body">
                                    <h3 class="text-center">Sierra de Malagón</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    La Sierra de Malagón se posiciona al sur del puerto de Guadarrama y presenta una
                                    gran cantidad de
                                    vegetación. Toda esta zona contiene una gran cantidad de elementos históricos, como
                                    varios bunkers de la Guerra Civil Española
                                    o la Silla de Felipe II.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/cotos/sierra_cotos_sm.jpeg" alt="El Yelmo">
                                <div class="card-body">
                                    <h3 class="text-center">Cotos</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    La zona que contiene el pico más alto de la Sierra de Guadarrama: Peñalara. Una zona
                                    muy variada,
                                    con mucho bosque, pero también roca. Una zona que hay que visitar sí o sí.
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>

</main>

<!-- FOOTER -->
<footer>
    <?php include "template/footer.php"; ?>
</footer>

<?php include "template/scripts.php"; ?>

</body>
</html>
