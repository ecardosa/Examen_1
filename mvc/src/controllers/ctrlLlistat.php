<?php
// Este controlador sirve para ver la pagina de register.php

function ctrlLlistatView($request,  $response,$container){
    $Insc = $container->Users();

    $inscripciones = $Insc->getAllUsers();

    $response->set("inscripciones", $inscripciones);
    $identified = $request->get("SESSION","identified");
    $response->set("identified",$identified);
    
    $response->setTemplate("llistat.php");
    return $response;
}