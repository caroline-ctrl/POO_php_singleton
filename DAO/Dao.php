<?php
/**
 * Connexion à la base de données
 */
class Dao {

    public $servername = 'localhost';
    public $username = "root";
    public $password = "";
    public $dbname = "poo_php";
    private static $INSTANCEDAO = null;

    private function __construct()
    {
        try{
            $conn = new PDO('mysql:host=' . $this->servername . ';dbname=' . $this->dbname, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connexion réussie ';
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage() . " ";
        }
    }

    /**
     * singleton
     */
    public static function getInstance(){
        if(is_null(self::$INSTANCEDAO)){
            self::$INSTANCEDAO = new Dao();
            //print_r(self::$INSTANCEDAO);
            return self::$INSTANCEDAO;
        }
        //echo "hold dao ";
        return self::$INSTANCEDAO;
    }
}