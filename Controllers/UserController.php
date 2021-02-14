<?php
include(__DIR__ . '\..\DAO\Dao.php');

class UserController implements Crud {



    public function connectDB(){
        // $instanceDAO = Dao::getInstance();
         return Dao::getInstance();

    }

    /**********************METHODES INTERFACE****************/
    public function createUser($data){
        $this->connectDB();
        if (isset($data)){
            $hash = password_hash($data['password'], PASSWORD_DEFAULT);
            if (password_verify($data['passwordVerif'], $hash)){
                $datas = array(
                    strtolower($data['firstName']),
                    strtolower($data['lastName']),
                    strtolower($data['pseudo']),
                    strtolower($data['mail']),
                    strtolower($data['password'])
                );
                return $datas;
            }
        }
    }

    public function getAll(){}

    public function getById($id){}

    public function update($id){}

    public function delete($id){}
}