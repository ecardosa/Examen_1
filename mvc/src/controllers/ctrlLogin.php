<?php
// Este controlador sirve para ver la pagina de login.php

function ctrlLoginView($request,  $response,$container){
    $response->setTemplate("login.php");
    return $response;
}