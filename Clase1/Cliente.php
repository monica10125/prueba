<?php
/**
 * Created by PhpStorm.
 * User: rodrigoaranda
 * Date: 5/14/15
 * Time: 11:27 AM
 */

class Cliente {
    private $documento;
    private $nombre;
    private $correoElectronico;




    //definicón del método constructor solo con dos parámetros
    function __construct($doc, $name)
    {
        $this->documento = $doc;
        $this->nombre = $name;
    }

    /**
     * @return mixed
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * @param mixed $correoElectronico
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;
    }

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


} 