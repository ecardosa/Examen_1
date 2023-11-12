<?php

function ctrlIndex($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);


    $logged = $request->get("SESSION","logged");
    $tipo="";
    $response->set("tipo",$tipo);

    $response->set("logged",$logged);
    $response->set("user",$logged);
    $response->setTemplate("index.php");

    
    return $response;
}