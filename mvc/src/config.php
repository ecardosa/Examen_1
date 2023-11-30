<?php

/** 
 * Fitxer de configuració de l'aplicació.
 * */ 

 $config = [
    "db" => [
        "user" => "root",
        "pass" => "",
        "db" => "examen_1",
        "host" => "localhost"
    ],
];





include "../src/model/Users.php";
include "../src/model/Db.php";
