<?php
/**
 * Created by PhpStorm.
 * User: rodrigoaranda
 * Date: 5/14/15
 * Time: 2:35 PM
 */

require_once 'Cuenta.php';
require_once 'TarjetaDebito.php';

class Ahorros extends Cuenta{

    private $tarjeta;




    function __construct($numeroCuenta, $saldo, $tipoCuenta, $numTarjeta, $fechaVigencia){
        parent::setNumeroCuenta($numeroCuenta);
        parent::setSaldo($saldo);
        parent::setTipoCuenta($tipoCuenta);
        $this->tarjeta = new TarjetaDebito($numTarjeta, $fechaVigencia);  //Objeto de la clase en relación de composición
    }


    /**
     * @param $valorRetiro : recibe una cantidad y la resta del saldo existente. si no alcanza envía un msg
     */
    public function retirarCantidad($valorRetiro){

        if(parent::getSaldo()<$valorRetiro){
            return 'saldo insuficiente para realizar el retiro';
        }else{
            parent::setSaldo(parent::getSaldo()-$valorRetiro);
            parent::setSaldo(parent::getSaldo()-(parent::getSaldo()*2/100));

            return 'Transacción exitosa. su nuevo saldo es : '.parent::getSaldo();
        }

    }

    /**
     * @return TarjetaDebito
     */
    public function getTarjeta()
    {
        return $this->tarjeta;
    }

} 