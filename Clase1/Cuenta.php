<?php
/**
 * Created by PhpStorm.
 * User: rodrigoaranda
 * Date: 5/14/15
 * Time: 2:30 PM
 */

/**
 * En esta clase vamos a crear una cuenta abstrayendo de una cuenta bancaria.
 * Para ello se crearan los métodos retirarCantidad, consultarSaldo y consignarCantidad, con un
 *funcionamiento elemental.
 */

require_once 'Cliente.php';

abstract class Cuenta{

//definimos los atributos

    private $numeroCuenta;
    private $tipoCuenta;
    private $saldo=0;
    private $cliente;  //objeto de la clase asociada




    /**
     * El siguiente método es el constructor que tiene por función inicializar los atributos al crear un objeto
     * es decir, obliga a que cuando creemos un objeto le pasemos unos valores iniciales.
     * @param $numeroCuenta
     * @param $saldo
     * @param $tipoCuenta
     */

    function __construct($numeroCuenta, $saldo, $tipoCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;
        $this->saldo = $saldo;
        $this->tipoCuenta = $tipoCuenta;

    }

    /**
     * @param mixed $cliente  Es método se utiliza para instanciar el objeto Cliente
     */
    public function addCliente(Cliente $client)
    {
        $this->cliente = $client;
    }

    /**
     * @return Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }


    /**
     * @return mixed
     */
    public function getNumeroCuenta()
    {
        return $this->numeroCuenta;
    }

    /**
     * @param mixed $numeroCuenta
     */
    public function setNumeroCuenta($numeroCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    /**
     * @return mixed
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * @param mixed $tipoCuenta
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;
    }



    /**
     * @param entero $monto : recibe una cantidad y lo suma a lo existente en $saldo
     */

    public function consignarCantidad($monto){
        $this->saldo+=$monto;

        return $this->saldo;
    }



    public function consultarSaldo(){
        return "su saldo actual es : $ $this->saldo";
    }





}

