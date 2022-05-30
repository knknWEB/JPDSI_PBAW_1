<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;


class NewsCtrl {

    public function action_news() {
            try {
                $this->news = App::getDB()->select("news",[
                        "Title",
                        "Date",
                        "Author",
                        "Description",
                        "Photo"
                    ],[
                        "ORDER" => ["Date"=>"DESC"]
                    ]
                
                );
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów!');
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                    App::getRouter()->forwardTo('home');
                }
                App::getRouter()->forwardTo('home');
            }
            $this->generateView();
       
      
    }
    public function generateView() {
        App::getSmarty()->assign('news',$this->news);
        App::getSmarty()->display('news.tpl');
    }
}