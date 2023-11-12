<?php


function isLogged($request, $response, $container, $next){

    $logged = $request->get("SESSION", "logged");

    if(!$logged) {
        $response->redirect("location: index.php?r=login");
        return $response;
    }

    $response->set("user", $request->get("SESSION", "user"));

    $response = $next($request, $response, $container);


    return $response;
    
}