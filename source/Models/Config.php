<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Config extends DataLayer
{
    public function __construct()
    {
        parent::__construct("config", [], 'id', false);
    }
}