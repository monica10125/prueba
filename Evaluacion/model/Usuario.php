<?php

class Usuario
{

    private $idUsuario;
    private $username;
    private $primerNombre;
    private $password;
    private $lastpassword;
    private $lastpwdchange;
    private $ultimoNombre;
    private $email;
    private $estado;


    public function __construct($id,$nameuser, $primerN, $contraseña, $ultimoN,$correo,$estado)
    {
        $this->idUsuario = $id;
        $this->username = $nameuser;
        $this->primerNombre = $primerN;
        $this->password = $contraseña;
        $this->ultimoNombre = $ultimoNombre;
        $this->email = $correo;
        $this->estado = $estado;

    }


    public function setIdUsuario($id)
    {
        $this->idUsuario = $id;
    }

     public function getIdUsuario()
    {
        return $this->idUsuario;
    }
  
    public function getusername()
    {
        return $this->username;
    }
  public function setusername($nombreUsuario)
    {
        $this->username = $nombreUsuario;
    }

     public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

   
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;
    }

    public function getPassword()
    {
        return $this->password;
    }

   
    public function setPassword($password)
    {
        $this->password = $password;
    }

  
    public function getLastpassword()
    {
        return $this->lastpassword;
    }

  
    public function setLastpassword($lastpassword)
    {
        $this->lastpassword = $lastpassword;
    }

    public function getLastpwdchange()
    {
        return $this->lastpwdchange;
    }

    public function setLastpwdchange($lastpwdchange)
    {
        $this->lastpwdchange = $lastpwdchange;
    }

    
    public function getUltimoNombre()
    {
        return $this->ultimoNombre;
    }

    
    public function setUltimoNombre($ultimoNombre)
    {
        $this->ultimoNombre = $ultimoNombre;
    }

   
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;
    }

 
    public function getEstado()
    {
        return $this->estado;
    }

    
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
}
?>