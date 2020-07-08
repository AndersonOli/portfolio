<?php

namespace Source\App;
use League\Plates\Engine;

class Controller
{
    public $views;
    public function __construct()
    {
        session_start();
        $this->views = new Engine(dirname(__DIR__, 1).'/Views', 'php');
    }
}