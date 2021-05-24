<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gracias por su mensaje</title>

    <?php include "template/head.php"; ?>

    <link rel="stylesheet" type="text/css" href="assets/styles/thanks.css">
</head>
<body>
<?php
define("RECIPIENT_NAME", "Los Picos de Guadarrama");
define("RECIPIENT_ADDRESS", "email_prueba");
$senderEmail = $_POST['email'];
$senderName = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Si existen todos los valores, mandamos el correo
$success = false;
if (!empty($senderEmail) && !empty($senderName) && !empty($subject) && !empty($message)) {
    $recipient = RECIPIENT_NAME . " <" . RECIPIENT_ADDRESS . ">";
    $headers = "From: " . $senderName . " <". $senderEmail . ">";
    $success = mail($recipient, $subject, $message, $headers);
}
?>
<header>
    <?php include "template/header.php"; ?>
</header>

<!-- <?php 
if ($success): 
?> -->
<main>
    <section class="thanks-title">
        <h1 class="display-2">Gracias por su mensaje</h1>
    </section>
    <section class="thanks-text container">
        <h2 class="h4">Correo enviado. Aquí lo puedes revisar:</h2>
        <p>De: <?php echo htmlspecialchars($senderEmail) ?></p>
        <h3 class="h5"><?php echo htmlspecialchars($subject) ?></h3>
        <p class="lead text-muted">
            <?php echo htmlspecialchars($message) ?>
        </p>
    </section>
    <section class="thanks-text container mt-5">
        <h2 class="h4">Leeremos su sugerencia o su duda con la mayor brevedad posible</h2>
        <p class="lead text-muted">
            Valoramos toda las sugerencias que nos hagas para poder mejorar en nuestro proyecto personal. Todas las
            críticas serán
            bienvenidas con mucho gusto. Si tienes cualquier tipo de pregunta, ponte en contacto con nosotros y
            trataremos de ayudarte
            en la medida de lo posible. Trataremos de responder en menos de 24h, pero no siempre será posible.
        </p>
        <a href="index.php" class="btn btn-primary btn-lg">Volver a la página</a>
    </section>
</main>
<!-- <?php 
else: 
?>
<main>
<section class="thanks-title">
        <h1 class="display-2">Gracias por su mensaje</h1>
    </section>
    <section class="thanks-text container">
        <h2 class="h4">Algo extraño ha ocurrido</h2>
        <p class="lead text-muted">
            Lo sentimos, ha habido un problema al enviar su mensaje. Por favor, inténtelo de nuevo.
        </p>
        <a href="index.php" class="btn btn-primary btn-lg">Volver a la página</a>
    </section>
</main>
<?php 
endif 
?> -->


<?php include "template/scripts.php"; ?>

</body>
</html>