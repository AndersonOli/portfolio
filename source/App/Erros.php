<?php

namespace Source\App;

class Erros extends Controller {
    public function erro($data)
    {
        if($data["code"] == 404){
            echo $this->views->render('erros/404');
        }
    }
}