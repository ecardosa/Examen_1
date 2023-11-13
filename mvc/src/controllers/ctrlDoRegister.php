<?php
// Este controlador transforma los datos a variables php y llama a la funcion register
// de Users.php

function ctrlRegister($request, $response, $container){

    $user = $request->get(INPUT_POST, "n");
    $lastname = $request->get(INPUT_POST, "lastname");
    $date = $request->get(INPUT_POST, "date");
    $calle = $request->get(INPUT_POST, "calle");
    $num = $request->get(INPUT_POST, "number");
    $city = $request->get(INPUT_POST, "city");
    $cp = $request->get(INPUT_POST, "cp");


    
    $userModel = $container->Users();
    $idModel = $container->Users();

    $userModel = $userModel->register($user,$lastname,$date,$calle,$num,$city,$cp);
    $lastId = $idModel->getLastId($id);
    var_dump($lastId);

   
    $destinationFolder = '../public/images/';
    $destinationimg = '../../images/';
    $rutaImg = $destinationimg . $lastId . "/";
    $rutaBase = $destinationFolder . $lastId . "/";

    if (mkdir($rutaBase, 0750, true)) {
        $nombreArchivo = $_FILES["images"]["name"];
        $ruta = $rutaBase . $nombreArchivo;
        
        if (move_uploaded_file($_FILES["images"]["tmp_name"], $ruta)) {
            echo "Archivo subido correctamente.";
        } else {
            echo "Error al mover el archivo.";
        }
    } else {
        echo "Error al crear la carpeta.";
    }

    if($userModel) {        
        $response->redirect("location: index.php?r=confirmacio");
    } else {
        $response->redirect("location: index.php?r=confirmacio");
    }

    return $response;
}
