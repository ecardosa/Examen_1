<?php

function ctrlIndex($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);


    $identified = $request->get("SESSION","identified");
    $tipo="";
    $response->set("tipo",$tipo);

    $response->set("identified",$identified);
    $response->set("user",$identified);
    $response->setTemplate("index.php");

    
    return $response;
}