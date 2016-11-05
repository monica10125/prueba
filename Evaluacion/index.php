<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="view/css/bootstrap.min.css" rel="stylesheet">
    <script src="view/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD WITH POSTGRESQL</h3>
                
                <?php
                
//En esta funcionalidad solo se recoge una variable pasada por get y se pinta de dos colores
//Es ilustrativo. La ide es mejorar usando los recursos para ello.                
                
if (isset($_GET['msg'])) {
    if (isset($_GET['c']) && $_GET['c'] != 1) {
?>
                   <div style="color: green;">
                    <?php echo $_GET['msg'];
?>
                   </div>
                    <?php
    } else {

?>
                   <div style="color: red;">
                    <?php echo $_GET['msg'];
?>
                     </div>
                    <?php
    }

}
?>
                
                
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Id Usuario</th>
                      <th>Nombre Usuario</th>                  
                    </tr>
                  </thead>
                  <tbody>
                                   
                   <?php
require_once ('model/UsuarioDao.php');
//echo 'LLamado al Dao <br> ';
$udao = new UsuarioDao();
$salida = $udao->getAll();

foreach ($salida as $obj) {
    echo '<tr>';
    echo '<td>' . $obj->getIdUsuario() . '</td>';
    echo '<td>' . $obj->getNombreUsuario() . '</td>';
    echo '</tr>';

}


DbConnection::disconnect();
?>
                  
                  
                  </tbody>
            </table>
        </div>
        
        <div>
        
        </div>
        
        
    </div> <!-- /container -->
  </body>
</html>