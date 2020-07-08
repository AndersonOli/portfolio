<?php

namespace Source\App;

class Web extends Controller {
    public function home()
    {
        echo $this->views->render('home/index');
    }
}