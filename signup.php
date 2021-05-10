<!doctype html>
<html lang="en">
<head>
    <title>Registro</title>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">

    <?php include "template/head.php"; ?>

    <!-- Mis estilos -->
    <link rel="stylesheet" type="text/css" href="assets/styles/session.css">

</head>
<body class="text-center">

<header>
    <?php include "template/header.php"; ?>
</header>

<main class="form-signin">
    <form class="sign-up" action="/index.php" method="GET">
        <img class="mb-4 logo" src="assets/images/logo-original-transparent.png" alt="Logo">
        <h1 class="display-5 mb-4 fw-normal">Crear cuenta</h1>
        <p class="lead text-muted mb-4">Introduzca los siguientes datos para crear una cuenta:</p>

        <div class="form-floating mb-1">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                   required>
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-1">
            <input type="text" class="form-control" id="floatingText" name="name" placeholder="Nombre" required>
            <label for="floatingText">Nombre de usuario</label>
        </div>
        <div class="form-floating mb-1">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña"
                   required>
            <label for="floatingPassword">Constraseña</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="Repita contraseña"
                   required>
            <label for="floatingConfirmPassword">Repita la constraseña</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Crear cuenta</button>
        <p class="mt-5 mb-3 text-muted">&copy; Desde 2021</p>
    </form>
</main>

<?php include "template/scripts.php"; ?>

</body>
</html>
