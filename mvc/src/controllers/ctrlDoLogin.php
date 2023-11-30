<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function ctrlDoLogin($request, $response, $container)
{
    $contrasenyaCorrecta = '123';

if (isset($_POST['password'])) {
    $passwordIngresada = $_POST['password'];

    if ($passwordIngresada === $contrasenyaCorrecta) {
        $_SESSION['identified'] = true;
        
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
die();

}
