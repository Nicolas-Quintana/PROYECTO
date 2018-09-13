<?php
    require_once 'fileCont.php';

// Creamos un array que va a representar a nuestro usuario y lo devolvemos.
function crearUsuario($nombre,$apellido,$email,$password,$sexo,$fotoPerfil)
{
    $usuario = [
        "nombre" => $nombre,
        "apellido" => $apellido,
        "email" => $email,
        "password" => $password,
        "sexo"=> $sexo,
        "fotoPerfil" => guardarFoto($fotoPerfil)
    ];

    return $usuario;
}



?>