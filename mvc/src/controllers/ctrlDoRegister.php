<?php
// Este controlador transforma los datos a variables php y llama a la funcion register
// de Users.php

function ctrlRegister($request, $response, $container){

    $user = $request->get(INPUT_POST, "n");
    $lastname = $request->get(INPUT_POST, "lastname");
    $mail = $request->get(INPUT_POST, "email");
    $phone = $request->get(INPUT_POST, "phone");
    $cardnumber = $request->get(INPUT_POST, "cardnumber");
    $pass = $request->get(INPUT_POST, "pass");

    
    $userModel = $container->Users();

    $userModel = $userModel->register($user,$lastname,$phone,$mail,$cardnumber,$pass);
    if($userModel) {        
        $response->redirect("location: index.php");
    } else {
        $response->redirect("location: index.php");
    }

    return $response;
}
