<?php
class User {
    
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $fotoPerfil;

    // Creamos el usuario, esta funcion se ejecuta cada vez que se crea un nuevo objeto.
    public function __construct(String $nombre, String $apellido,String $email, String $password, String $fotoPerfil = null)
    {
            $this->setNombre($nombre);
            $this->setApellido($apellido);
            $this->setEmail($email);
            $this->setPassword($password);
            $this->setFotoPerfil($fotoPerfil);
    }

    //estas funciones setean y regresan los atributos de la clase a través de metodos
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(String $nombre){
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido(String $apellido){
        $this->nombre = $apellido;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(String $email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(String $password)
    {
        $this->password = $password;

        return $this;
    }

    public function getFotoPerfil()
    {
        return $this->fotoPerfil;
    }

    public function setFotoPerfil(String $fotoPerfil)
    {
        $this->fotoPerfil = $fotoPerfil;

        return $this;
    }
}

?>