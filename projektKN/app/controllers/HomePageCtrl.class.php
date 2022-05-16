<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class HomePageCtrl {
    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych
    public function action_home()
    {

    


        // 4. wygeneruj widok
        App::getSmarty()->display('home.tpl');
    }
}
