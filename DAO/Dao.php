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

    /**
     * a la création de l'objet, une connection a la bdd se fait
     * comme il y a un singleton, il n'y aura qu'une connection a la bdd
     */
    private function __construct()
    {
        try{
            $conn = new PDO('mysql:host=' . $this->servername . ';dbname=' . $this->dbname, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
            return self::$INSTANCEDAO;
        }
        //echo "hold dao ";
        return self::$INSTANCEDAO;
    }


    /**********************METHODES INTERFACE****************/
    public function createUser($data){

    }

    public function getAll(){}

    public function getById($id){}

    public function update($id){}

    public function delete($id){}
}