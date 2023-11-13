<?php

function ctrlDoLogin($request, $response, $container){

    $codi = $request->get(INPUT_POST, "codi");
    
   
    if($codi == "123") {

        $response->setSession("identified", true);
        echo json_encode(["success" => true, "redirect" => "index.php?r=llistat"]);
        $response->redirect("location: index.php?r=llistat");

    } else {
        echo json_encode(["success" => false, "error" => "Codi Incorrecte"]);
    }

    return $response;
}

