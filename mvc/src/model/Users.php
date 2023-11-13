<?php

namespace Daw;

class Users {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll($ID_Usuari) {
        $stm = $this->sql->prepare('SELECT * FROM inscripciones WHERE id = :ID_Usuari;');
        $stm->execute([':ID_Usuari' => $ID_Usuari]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);

        if($result){
            return $result;
        } else {
            false;
        }
    }

    public function getAllUsers() {
        $stm = $this->sql->prepare('SELECT * FROM inscripciones;');
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);

        if($result){
            return $result;
        } else {
            false;
        }
    }

    
    public function updateUser($ID_Usuari, $name, $lastname, $phone, $email, $pass) {
        $sql = 'UPDATE usuari 
                SET Nom = :name, Cognoms = :lastname, Telefon = :phone, Email = :email, pass = :pass
                WHERE ID_Usuari = :ID_Usuari';
    
        $stm = $this->sql->prepare($sql);
        $stm->execute([
            ':ID_Usuari' => $ID_Usuari,
            ':name' => $name,
            ':lastname' => $lastname,
            ':phone' => $phone,
            ':email' => $email,
            ':pass' => $pass
        ]);
    }
    
    public function getLastId(){
        $stm = $this->sql->prepare("SELECT MAX(id) AS last_id FROM inscripciones;");
        $stm->execute();
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if($result && isset($result['last_id'])){
            return $result['last_id'];
        } else {
            return null;
        }
    }
    

    public function login($email, $pass) {
        $stm = $this->sql->prepare('SELECT ID_Usuari , Email, Rol, pass FROM usuari WHERE Email = :Email;');
        $stm->execute([':Email' => $email]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
    
        if (is_array($result) && $result["pass"] == $pass) {
            return $result;
        } else {
            return false;
        }
    }
    

    public function register($name, $lastname, $date, $calle, $num, $city, $cp) {
    
    
    
        // Si el correo electrónico no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO inscripciones (nombre, apellidos, fecha_nacimiento, calle, numero, ciudad, postal) VALUES (:n, :lastname, :date, :calle, :num, :city, :cp);');
        $result = $insertStmt->execute([
            ':n' => $name,
            ':lastname' => $lastname,
            ':date' => $date,
            ':calle' => $calle,
            ':num' => $num,
            ':city' => $city,
            ':cp' => $cp
        ]);
   
    }

    public function getUsuariQueReserva() 
    {
        $stm = $this->sql->prepare("SELECT DISTINCT u.ID_Usuari, CONCAT(u.Nom, ' ', u.Cognoms) AS Nom_Usuari FROM usuari u LEFT JOIN reservas r ON u.ID_Usuari = r.ID_Usuari;");
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
 

}