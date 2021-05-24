<?php

// Simulo BBDD con usuarios y contraseñas en claro y recupero los datos:

require_once './conectar.php';

$sql = "SELECT email, password, rol FROM users";
$statement = $db->prepare($sql);
$statement->execute();

$logins = array();

while ($fila = $statement->fetch()) {
    // $logins[$fila['email']] = $fila['password']; 
    $logins[$fila['email']] = array($fila['password'], $fila['rol']);
}

function checkLogin($username, $password, $logins) {
    if (!isset($username) || !isset($password)) {
        return false;
    }
    return (array_key_exists($username, $logins) && (strcmp($logins[$username][0], $password) == 0));
}

// Valido
if (!checkLogin($_REQUEST['email'], $_REQUEST['password'], $logins)) {
    session_destroy();
    $errorLogin = "El usuario o la contraseña son incorrectos";
    header("Location: ../signin.php?errorLogin=$errorLogin"); //Vuelve a login.php con el error
} else {
    session_start();
    $_SESSION['username'] = $_REQUEST['email']; // guardo los datos en la sesión
    header("Location: ../index.php");   // Redirijo a la página de usuario logueado
}