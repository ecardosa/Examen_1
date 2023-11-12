<?php

function ctrlDoLogin($request, $response, $container){

    $email = $request->get(INPUT_POST, "email");
    $pass = $request->get(INPUT_POST, "pass");

    $userModel = $container->users();

    $userModel = $userModel->login($email, $pass);
    if($userModel) {

        $response->setSession("user", $userModel);
        $response->setSession("logged", true);
         $response->redirect("location: index.php");
     
    } else {
        $response->setSession("loginError", "Usuario o contraseña incorrectos");
        $response->redirect("location: index.php?r=login");
    }

    
    return $response;
}

