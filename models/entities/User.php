<?php
class User {
    public  $firstName;
    public  $lastName;
    public  $pseudo;
    public  $mail;
    public  $password;


    function __construct( $firstName,  $lastName,  $pseudo,  $mail,  $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->pseudo = $pseudo;
        $this->mail = $mail;
        $this->password =$password;
    }
}