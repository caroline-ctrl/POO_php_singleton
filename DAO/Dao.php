<?php
include(__DIR__ . '\..\models\interfaces\Crud.php');
/**
 * Connexion à la base de données
 */
class Dao implements Crud {

    public $servername = 'localhost';
    public $username = "root";
    public $password = "";
    public $dbname = "poo_php";
    private static $INSTANCEDAO = null;
    public $conn;

    /**
     * a la création de l'objet, une connection a la bdd se fait
     * comme il y a un singleton, il n'y aura qu'une connection a la bdd
     */
    private function __construct()
    {
        try{
            $this->conn = new PDO('mysql:host=' . $this->servername . ';dbname=' . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'Connexion réussie ';
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage() . " ";
        }
    }

    /**
     * singleton
     */
    public static function getInstance(){
        if(is_null(self::$INSTANCEDAO)){
            self::$INSTANCEDAO = new self();
            //print_r(self::$INSTANCEDAO);
            //echo " new dao ";
            return self::$INSTANCEDAO;
        }
        //echo " hold dao ";
        return self::$INSTANCEDAO;
    }


    /**********************METHODES INTERFACE****************/
    public function createUser($data){
        //echo ' insert bdd ';
        //var_dump($this->conn); exit;
        $sql = $this->conn->prepare('INSERT INTO user (user_firstname, user_lastname, user_pseudo, user_mail, user_password) VALUES (:firstName, :lastName, :pseudo, :mail, :passwordA)');
        $sql->bindValue(':firstName', $data[0], PDO::PARAM_STR);
        $sql->bindValue(':lastName', $data[1], PDO::PARAM_STR);
        $sql->bindValue(':pseudo', $data[2], PDO::PARAM_STR);
        $sql->bindValue(':mail', $data[3], PDO::PARAM_STR);
        $sql->bindValue(':passwordA', $data[4], PDO::PARAM_STR);
        $sql->execute();
      /* var_dump(array(
            ':firstName' => $data[0],
            ':lastName' => $data[1],
            ':pseudo' => $data[2],
            ':mail' => $data[3],
            ':passwordA' => $data[4]
        ));
*/
        //var_dump($data[0], $data[1], $data[4]);
    }

    public function getAll(){}

    public function getById($id){}

    public function update($id){}

    public function delete($id){}
}