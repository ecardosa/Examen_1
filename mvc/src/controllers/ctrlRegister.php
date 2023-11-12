<?php
// Este controlador sirve para ver la pagina de register.php

function ctrlRegistroView($request,  $response,$container){
    $response->setTemplate("register.php");
    return $response;
}