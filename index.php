<!doctype html>
<html lang="en">
<head>
    <title>Los Picos de Guadarrama</title>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/carousel/carousel.css" rel="stylesheet">

    <?php include "template/head.php"; ?>

    <!-- Mis estilos -->
    <link rel="stylesheet" type="text/css" href="assets/styles/index.css">
</head>
<body>

<header>
    <?php include "template/header.php"; ?>
</header>

<main>
    <section class="front-presentation">
        <div class="container">
            <img src="assets/images/logo-original-gray.jpeg" alt="logo Los Picos de Guadarrama">
            <h1 class="display-1 text-center">Los Picos de Guadarrama</h1>
            <p class="lead text-center d-none d-md-flex">
                Página Web dedicada a los deportes de montaña y a la Sierra de Guadarrama. Nuestro objetivo es mostrar
                una visión personal y subjetiva de las zonas de la Sierra de Guadarrama,
                añadiendo rutas que vayamos realizando por esta, donde describiremos nuestras sensaciones y vivencias.
                Además, queremos hacer de esto una comunidad donde otras personas también
                puedan añadir sus rutas. Más adelante añadiremos también secciones donde intentaremos instruir las
                nociones más básicas sobre los deportes de montaña; donde hablaremos de temas
                como el de la salud, el material y equipación necesarios u otras temáticas de interés.
            </p>
            <div class="scroll-down">
                <p>Navega por nuestra web!</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-bar-down"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                </svg>
            </div>
        </div>
    </section>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <section class="container marketing">

        <article class="secciones">
            <!-- Three columns of text -->
            <div class="row">
                <div class="col-lg-4 section">
                    <img class="bd-placeholder-img rounded-circle" src="assets/images/home/seccion_rutas.jpeg"
                         alt="Imagen de una persona sujetando un mapa" focusable="false"/>
                    <h2>Rutas</h2>
                    <p>Publica aquí tus rutas favoritas y comenta tus sensaciones y vivencias. ¡También puedes ver qué
                        rutas han hecho los demás!</p>
                    <p><a class="btn btn-secondary" href="rutas.php">Ver sección &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 section">
                    <img class="bd-placeholder-img rounded-circle" src="assets/images/home/seccion_blog.jpeg"
                         alt="Una persona escribiendo en un portatil" focusable="false"/>
                    <h2>Blog</h2>
                    <p>¡Publica lo que tú quieras y ayuda a tus compañeros mientras tanto! Desde temas de orientación
                        hasta de técnicas de deporte, ¡lo que tú quieras!</p>
                    <p><a class="btn btn-secondary disabled" href="#">Ver sección &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 section">
                    <img class="bd-placeholder-img rounded-circle" src="assets/images/home/seccion_sierra.jpeg"
                         alt="La Bola del Mundo, en la Sierra de Guadarrama" focusable="false"/>
                    <h2>Sierra de Guadarrama</h2>
                    <p>Descubre todas las zonas de la Sierra de Guadarrama en esta sección, ¡desde las zonas más
                        conocidas hasta
                        las zonas más recónditas!</p>
                    <p><a class="btn btn-secondary" href="sierra.php">Ver sección &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <!-- Three columns -->
            <div class="row">
                <div class="col-lg-4 section">
                    <img class="bd-placeholder-img rounded-circle" src="assets/images/home/seccion_intro.jpeg"
                         alt="Imagen de una mujer andando en la montaña" focusable="false"/>
                    <h2>Introducción</h2>
                    <p>En esta sección vamos a tratar de enseñar lo más básico en lo que respecta a los deportes de
                        montaña. Si crees que te puede venir bien, ¡no dudes en visitarla!</p>
                    <p><a class="btn btn-secondary disabled" href="#">Ver sección &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 section">
                    <img class="bd-placeholder-img rounded-circle" src="assets/images/home/seccion_equipamiento.jpeg"
                         alt="Imagen de una persona escalando" focusable="false"/>
                    <h2>Material y equipamiento</h2>
                    <p>En esta sección vamos a detallar todo el material indispensable para iniciarse en los deportes de
                        montaña: trekking, escalada, bici, trail running, etc. </p>
                    <p><a class="btn btn-secondary disabled" href="#">Ver sección &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 section">
                    <img class="bd-placeholder-img rounded-circle" src="assets/images/home/seccion_salud.jpeg"
                         alt="Imagen de una persona mirando un smartwatch" focusable="false"/>
                    <h2>Salud</h2>
                    <p>Aquí se detallan temas relacionados con la salud y el deporte; como puede ser rehablitación de
                        lesiones menores o alimentación básica.</p>
                    <p><a class="btn btn-secondary disabled" href="#">Ver sección &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </article>


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <article class="row featurette authors">
            <div class="col-md-7">
                <h2 class="featurette-heading">¿Quiénes somos?</h2>
                <p class="lead">
                    Somos dos personas que tenemos mucho interés por la montaña, los deportes que se pueden realizar en
                    esta y por conocer la Sierra de Guadarrama a fondo. Uno, más enfocado en el Trail Running y, el
                    otro, en la
                    escalada y la bici. Además, vamos todas las semanas a hacer senderismo por la montaña. Nuestro
                    objetivo es aprender mientras enseñamos lo que aprendemos y mostrar una visión más introductoria al
                    mundo de la montaña.
                </p>
                <p class="lead">Por otra parte, nos gustaría poder hacer una comunidad de esto y que otras personas
                    puedan aportar su conocimiento y su visión.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                     src="assets/images/home/home_quienes-somos.jpeg"
                     alt="Foto de las personas que hay detrás de la web" focusable="false">
            </div>
        </article>

        <hr class="featurette-divider">

        <article class="row featurette sierra_guadarrama">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">La Sierra de Guadarrama. <span class="text-muted">Un mundo propio.</span>
                </h2>
                <p class="lead">
                    La Sierra de Guadarrama ofrece muchisima variedad de paisajes, fauna y vegetación. Hay desde zonas
                    casi únicamente rocosas, como es La Pedriza, hasta zonas llenas de vegetación y agua. En esta página
                    trateremos de enseñar
                    zonas conocidas y no tan conocidas de esta sierra.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                     src="assets/images/home/home_sierra_guadarrama.jpeg" alt="Unas vacas tumbadas rumiando"
                     focusable="false">
            </div>
        </article>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </section><!-- /.container -->

    <section class="contact container">
        <h2 class="display-3 text-center">¿Tienes alguna duda o sugerencia?</h2>
        <p class="lead text-center">
            Valoramos toda las sugerencias que nos hagas para poder mejorar en nuestro proyecto personal. Todas las
            críticas serán
            bienvenidas con mucho gusto. Si tienes cualquier tipo de pregunta, ponte en contacto con nosotros y
            trataremos de ayudarte
            en la medida de lo posible.
        </p>
        <form class="row g-3 contact-form" action="graciasContacto.php" method="post">
            <div class="col-md-6">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Introduzca su nombre por favor...">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Introduzca su email por favor..."
                       required>
            </div>
            <div class="col-12">
                <label for="subject" class="form-label">¿Qué nos quieres comentar o preguntar?</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Introduzca el motivo del mensaje"
                       required>
            </div>
            <div class="col-12">
                <label for="message" class="form-label">Escriba el mensaje aquí</label>
                <textarea rows="10" cols="500" class="form-control" id="message" name="message"
                          placeholder="Escriba su duda o sugerencia aquí"></textarea>
            </div>
            <div class="col-12 send_msg">
                <button type="submit" class="btn btn-primary">Enviar mensaje!</button>
            </div>
        </form>
    </section>
</main>

<!-- FOOTER -->
<footer>
    <?php include "template/footer.php"; ?>
</footer>

<?php include "template/scripts.php"; ?>
<script src="assets/js/index.js"></script>

</body>
</html>
