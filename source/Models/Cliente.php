<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Cliente extends DataLayer
{
    public function __construct()
    {
        parent::__construct("clientes_logins", ["email"], 'id', false);
    }

    public function ValidLogin($email) {
        if($this->find("email = :email", "email={$email}")->count()){
            return 1;
        }
        return 0;
    }
}