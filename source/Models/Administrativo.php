<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Administrativo extends DataLayer
{
    public function __construct()
    {
        parent::__construct("admin", ["email", "senha", "nome"], 'id', false);
    }

    public function ValidLogin($email) {
        if($this->find("email = :email", "email={$email}")->count()){
            return 1;
        }
        return 0;
    }
}