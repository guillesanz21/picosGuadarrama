<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
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
    <form class="sign-in" action="/index.php" method="GET">
        <img class="mb-4 logo" src="assets/images/logo-original-transparent.png" alt="Logo">
        <h1 class="display-5 mb-4 fw-normal">Login</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                   required>
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password"
                   required>
            <label for="floatingPassword">Contraseña</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Recuérdame
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Acceder</button>
        <p class="mt-5 mb-3 text-muted">&copy; Desde 2021</p>
    </form>
</main>

<?php include "template/scripts.php"; ?>

</body>
</html>
