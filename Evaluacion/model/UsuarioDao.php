<?php


require_once dirname(__dir__ ) . '/utils/DbConnection.php';
require_once ('Usuario.php');
require_once ('IUsuarioDao.php');



class UsuarioDao implements IUsuarioDao
{

    private $conn = null;

    public function __construct()
    {
        $this->conn = DbConnection::connect();
    }

    public function getAll()
    {
        $result = array();
        $sql = "SELECT id,username  
				FROM users";
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            foreach ($stmt->fetchAll(PDO::FETCH_OBJ) as $row) {
                $newUser = new Usuario($row->iduser, $row->nombres);
                $result[] = $newUser;
            }
            DbConnection::disconnect();
        }
        catch (PDOException $e) {
            echo "Revisa el siguiente error :" . $e->getMessage();
            DbConnection::disconnect();
        }
        return $result;
    }


    //This method allows you insert a record of user object in database

    public function insertUser(Usuario $usuario)
    {
        $salida = 0; //marcador para el resultado de la acción
        $query = "INSERT INTO users (id, username,password,first_name,last_name,email,active)
				VALUES(?,?,?,?,?,?,?)";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $usuario->getIdUsuario(), PDO::PARAM_INT);
            $stmt->bindParam(2, $usuario->getusername(), PDO::PARAM_STR);
            $stmt->bindParam(3, $usuario->getPassword(), PDO::PARAM_STR);
            $stmt->bindParam(4, $usuario->getPrimerNombre(), PDO::PARAM_STR);
            $stmt->bindParam(5, $usuario->getUltimoNombre(), PDO::PARAM_STR);
            $stmt->bindParam(6, $usuario->getEmail(),PDO::PARAM_STR);
            $stmt->bindParam(7, $usuario->getEstado(), PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $salida = 'Registro guardado exitosamente';
            } else {
                $salida = 'No se pudo guardar el registro. Consulte al administrador';
            }
            DbConnection::disconnect();
        }
        catch (PDOException $e) {
            $salida= " Revisa el siguiente error :" . $e->getMessage();
            DbConnection::disconnect();

        }
        return $salida;

    }


}
