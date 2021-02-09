<?php
class User {
    public  $firstName;
    public  $lastName;
    public  $pseudo;
    public  $mail;
    public  $password;
    public  $createdAt;
    public  $updatedAt;

    function __construct( $firstName,  $lastName,  $pseudo,  $mail,  $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->pseudo = $pseudo;
        $this->mail = $mail;
        $this->password =$password;
        $this->createdAt = date("j/M/Y H:i:s");
        $this->updatedAt =  date("j/M/Y H:i:s");
    }
}