<?php


namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Chat extends DataLayer
{
    public function __construct()
    {
        parent::__construct("chat", ["token_chat", "msg"], 'id', false);
    }
}