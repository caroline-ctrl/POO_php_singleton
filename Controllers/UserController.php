<?php
include('DAO/Dao.php');

class UserController{



    public function connectDB(){
        // $instanceDAO = Dao::getInstance();
         return Dao::getInstance();

    }
}