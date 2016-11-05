<?php
/**
 * Created by PhpStorm.
 * User: rodrigoaranda
 * Date: 05/14/15
 * Time: 04:31 PM
 */

require_once 'Ahorros.php';
require_once 'Cliente.php';


// Se crea un nuveo cliente

$c = new Cliente(99999, 'prueba');

    /*
     * Se crea un objeto de tipo cuenta de ahorro en la cual hay que pasar los datos para crear adicionalmente la tarjeta
     */
$miCuenta = new Ahorros(1234-1, 1000, 'Ahorros', '6016-7268', '12/2018');


$miCuenta->consignarCantidad(5090);  //consigamos un valor

echo $miCuenta->consultarSaldo();  //muestra el saldo actual
echo '<br>';
echo $miCuenta->retirarCantidad(1111);  //retiramos una cantidad
echo '<br>';

echo $miCuenta->consultarSaldo();  //muestra el saldo actual
echo '<br>';

$miCuenta->addCliente($c);  //Adicionamos el cliente a la Cuenta

//obtenemos los datos del cliente desde un objeto de la clase Ahorros
echo 'la cuenta pertenece a : '.$miCuenta->getCliente()->getNombre();
echo '<br>';

//Mostramos los datos de la tarjeta y la cuenta
echo 'la tarjeta número '.$miCuenta->getTarjeta()->getNumero().' que pertences a la cuenta '.$miCuenta->getNumeroCuenta().' vence en '.$miCuenta->getTarjeta()->getFechaValidez();

echo '<br />';


// CReamos un arreglo de objetos

echo 'TRABAJO CON ARREGLOS DE OBJETOS';

$clientes = array();

array_push($clientes, $c);  //se adiciona un objeto con función

$c2 = new Cliente(2222, 'prueba2');
$c3 = new Cliente(33333, 'prueba3');
$c4 = new Cliente(44444, 'prueba4');

array_push($clientes,$c2);

$clientes[] = $c3;      //Agregacmos un objeto de la forma tradicional

array_push($clientes,$c4);


//Recorremos el arreglo

foreach($clientes as $unObjeto){


    print ' datos del cliente : '.$unObjeto->getNombre().' documento : '.$unObjeto->getDocumento().'<br />';

}



?>