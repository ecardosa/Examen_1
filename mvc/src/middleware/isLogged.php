<?php


function isidentified($request, $response, $container, $next){

    $identified = $request->get("SESSION", "identified");

    if(!$identified) {
        $response->redirect("location: index.php?r=llistat");
        return $response;
    }

    $response->set("user", $request->get("SESSION", "user"));

    $response = $next($request, $response, $container);


    return $response;
    
}