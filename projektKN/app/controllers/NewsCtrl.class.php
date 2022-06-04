<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;


class NewsCtrl {

    public function action_news() {
        $this->numberPageURL = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji! Przeniesiono na stronę startową!'); //pobieranie z CleanURL numeru strony
        $this->newsOnPage = 1; // ilość wpisów na stronie
        //blok instrukcji do pobrania liczby wpisów z bazy danych
        try {
            $this->numberNews = App::getDB()->count("news", 
                "idNews"
            );
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów!');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());
                App::getRouter()->forwardTo('home');
            }
            App::getRouter()->forwardTo('home');
        }
        $this->numberNewsPage = ceil( $this->numberNews /  $this->newsOnPage);//dzielenie modulo - zaokraglenie górne liczby stron postów
        //blok instrukcji do sprawdzenia, czy pobrano numer strony z clean URL, przypisanie odpowiedniego numeru strony 
        if (isset($this->numberPageURL)) {
            if ($this->numberPageURL < 1 || $this->numberPageURL > $this->numberNewsPage) 
                $this->numberPage = 1;
            else 
                $this->numberPage = $this->numberPageURL;
        }
        else $this->numberPage = 1;
        //blok generujący tablicę z numerami stron do wyswietlenia przez widok
        for($this->numberPageList = 0; $this->numberPageList< $this->numberNewsPage; $this->numberPageList++) {  
            $this->tab[$this->numberPageList]=$this->numberPageList+1;
        }  
        //ustalenie zakresu, potrzebnego do LIMITu, w celu pobrania odpowiedniej informacji, na odpowiedniej stronie
        $this->newsFrom = $this->newsOnPage * ($this->numberPage - 1);
        try {
            $this->news = App::getDB()->select("news",[
                "idNews",
                "Title",
                "Date",
                "Author",
                "Description",
                "Photo"
            ],[
                "ORDER" => ["idNews"=>"DESC"],
                "LIMIT" => [$this->newsFrom, $this->newsOnPage]
            ]);
        }catch (\PDOException $e) {
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
        App::getSmarty()->assign('pagesNumber',$this->numberNewsPage);
        App::getSmarty()->assign('pageNumber',$this->numberPage);
        App::getSmarty()->assign('tab',$this->tab);
        App::getSmarty()->display('news.tpl');
    }
}