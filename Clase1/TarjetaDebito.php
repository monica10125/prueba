<?php
/**
 * Created by PhpStorm.
 * User: rodrigoaranda
 * Date: 5/14/15
 * Time: 2:44 PM
 */

class TarjetaDebito {

    private $numero;
    private $fechaValidez;



    function __construct($num, $fecha)
    {
        $this->numero=$num;
        $this->fechaValidez=$fecha;
    }

    /**
     * @return mixed
     */
    public function getFechaValidez()
    {
        return $this->fechaValidez;
    }

    /**
     * @param mixed $fechaValidez
     */
    public function setFechaValidez($fechaValidez)
    {
        $this->fechaValidez = $fechaValidez;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }



}