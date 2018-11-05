<?php

class User {
    
private $nombre;
private $apellido;
private $email;
private $password;
private $fotoPerfil;


public function __construct(String $nombre, String $apellido, String $email, String $password, String $fotoPerfil = "")
    {
            $this->setUsername($nombre);
            $this->setUsername($apellido);
            $this->setEmail($email);
            $this->setPassword($password);
            $this->setFotoPerfil($fotoPerfil);
    }

    




}




?>