<?php

namespace Daw;

class Users {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll($ID_Usuari) {
        $stm = $this->sql->prepare('SELECT * FROM usuari WHERE ID_Usuari = :ID_Usuari;');
        $stm->execute([':ID_Usuari' => $ID_Usuari]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);

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
    

    public function register($name, $lastname, $phone, $mail, $cardnumber, $pass) {
        // Verificar si el correo electrónico ya está registrado
        $checkStmt = $this->sql->prepare('SELECT * FROM usuari WHERE Email = :mail');
        $checkStmt->execute([':mail' => $mail]);
    
        // Obtener el número de filas afectadas por la consulta SELECT
        $emailExists = $checkStmt->rowCount();
    
        // Si el correo electrónico ya está registrado, devuelve un mensaje de error
        if ($emailExists > 0) {
            return "El correo electrónico ya está registrado.";
        }
    
        // Si el correo electrónico no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO usuari (Nom, Cognoms, Telefon, Email, Tarjeta, Rol, pass) VALUES (:n, :lastname, :phone, :mail, :cardnumber,"Normal" , :pass );');
        $result = $insertStmt->execute([
            ':n' => $name,
            ':lastname' => $lastname,
            ':phone' => $phone,
            ':mail' => $mail,
            ':cardnumber' => $cardnumber,
            ':pass' => $pass
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