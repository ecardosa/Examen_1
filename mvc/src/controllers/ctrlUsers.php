<?php
// Este controlador sirve para ver la pagina de users.php

function ctrlUsersView($request,  $response,$container){


    $logged = $request->get("SESSION","logged");
    $response->set("logged",$logged);
    
    $response->setTemplate("users.php");
    return $response;
}