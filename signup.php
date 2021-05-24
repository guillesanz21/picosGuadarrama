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
    <form class="sign-up" action="/services/register.php" method="POST">
        <img class="mb-4 logo" src="assets/images/logo-original-transparent.png" alt="Logo">
        <h1 class="display-5 mb-4 fw-normal">Crear cuenta</h1>
        <p class="lead text-muted mb-4">Introduzca los siguientes datos para crear una cuenta:</p>

        <div class="form-floating mb-1">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                   required>
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-1">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña"
                   required>
            <label for="floatingPassword">Constraseña</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingConfirmPassword" name="password2" placeholder="Repita contraseña"
                   required>
            <label for="floatingConfirmPassword">Repita la constraseña</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Crear cuenta</button>
        <?php if (isset($_REQUEST['errorPassword'])): ?>
            <div class="panel panel-danger" style="color: red;">
                <div class="panel-heading">
                    Error
                </div>
                <div class="panel-body">
                    <p><?php echo $_REQUEST['errorPassword']; ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if (isset($_REQUEST['errorUserExists'])): ?>
            <div class="panel panel-danger" style="color: red;">
                <div class="panel-heading">
                    Error
                </div>
                <div class="panel-body">
                    <p><?php echo $_REQUEST['errorUserExists']; ?></p>
                </div>
            </div>
        <?php endif; ?>
        <p class="mt-5 mb-3 text-muted">&copy; Desde 2021</p>
    </form>
</main>

<?php include "template/scripts.php"; ?>

</body>
</html>
