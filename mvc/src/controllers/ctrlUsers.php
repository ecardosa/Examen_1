<?php
// Este controlador sirve para ver la pagina de users.php

function ctrlUsersView($request,  $response,$container){


    $identified = $request->get("SESSION","identified");
    $response->set("identified",$identified);
    
    $response->setTemplate("users.php");
    return $response;
}