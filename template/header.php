<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="./assets/images/logo-128.jpeg" alt="Logo Picos de Guadarrama" class="rounded img-fluid" />
            Picos de Guadarrama
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto mb-2 mb-md-0">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="rutas.php">Rutas</a>
                <a class="nav-link" href="sierra.php">Sierra de Guadarrama</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Blog</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más información
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#" tabindex="-1" aria-disabled="true">Introducción</a>
                        <a class="dropdown-item" href="#" tabindex="-1" aria-disabled="true">Material</a>
                        <a class="dropdown-item" href="#" tabindex="-1" aria-disabled="true">Salud</a>
                    </div>
                </div>
            </div>
            <?php 
                session_start();
                if(!isset($_SESSION['username'])) {
            ?>
            <div class="navbar-nav ml-auto action-buttons">
                <a class="nav-link btn btn-outline-primary" data-toggle="dropdown" href="signin.php">Login</a>
                <a class="nav-link btn btn-primary" data-toggle="dropdown" href="signup.php">Sign up</a>
            </div>
            <?php } else { ?>
            <div class="navbar-nav ml-auto action-buttons">
                <p class="text-light mt-2"><?php echo "Usuario: " . $_SESSION['username']; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</nav>