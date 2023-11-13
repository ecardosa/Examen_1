<?php
// Este controlador sirve para ver la pagina de register.php
function ctrlConfirmacioView($request, $response, $container) {
    $getConfirmacio = $container->Users();
    $getLastId = $container->Users();

    $ID_Usuari = $getLastId->getLastId();
    $userDetails = $getConfirmacio->getAll($ID_Usuari);

    // Pasa los detalles del usuario al template
    $response->set("userDetails", $userDetails);
    $response->set("ID_Usuari", $ID_Usuari);
    $response->setTemplate("confirmacio.php");

    return $response;
}