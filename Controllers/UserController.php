<?php
include('DAO/Dao.php');
//include('models/interfaces/Crud.php');

class UserController implements Crud {



    public function connectDB(){
        // $instanceDAO = Dao::getInstance();
         return Dao::getInstance();

    }

    /**********************METHODES INTERFACE****************/
    public function create(){
        $this->connectDB();
        if (isset($_POST['fistname'])){
            echo $_POST['fistname'];
            header('Location : http://poo-php/');
        }
    }

    public function getAll(){}

    public function getById($id){}

    public function update($id){}

    public function delete($id){}
}