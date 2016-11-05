<?php

/**
 * @author Monica Castellanos
 * @copyright 2016
 */

require_once dirname(__dir__ ) . '/model/UsuarioDao.php';


$error  = array();
//En este método se valida que se haya invocado el evento con el botón

if (isset($_REQUEST['btncreate']) && ($_REQUEST['btncreate']=='Create')) {

// se valida que los campos provenientes del formulario contengan datos
		if(empty($_POST['name']))
		{
			$error[] = "Name field is required <br>";	
		}
		if(empty($_POST['iduser']))
		{
			$error[] = "Id user field is required";	
		}
		if(count($error)>0)
		{
		  //si hay algun campo vacío se muestra el mensaje de error en el index
		   header('Location: ../index.php?msg=' . implode('',$error).'&c=1');
		}else{
		  try{
		      
              //sino hay mensajes de error entonces:
              //1. Se crea un objeto de tipo usuario con los datos recogidos del formulario
		   $newUser = new Usuario($_POST['iduser'], $_POST['name']);
           //2. Se crea un objeto dao
           
           $udao = new Usuariodao();
           
           //3. Se invoca al metodo insertar el objeto dao pasandole como parametro el objeto usuario creado, el cual devuelve una cadena
            $msg = $udao->insertUser($newUser);
            
            }catch (exception $e) {
                echo $e->getMessage();
                
                //Si se produce una excepción se notifica el error
            header('Location: ../index.php?msg=' . $e->getMessage().'&c=1');
		}
        //4. si todo salió bien, se redirige al index en donde debe verse el registro guardado
          header('Location: ../index.php?msg=' . $msg.'&c=0');
        }
        
}else{
    //Si se intenta acceder a la pagina desde url se mostrara este mensaje
echo 'Access denied';
}






?>